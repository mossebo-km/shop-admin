<?php

namespace App\Models;

use Kalnoy\Nestedset\NodeTrait;
use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\RequestSaver;

class AdminRolePermissionGroup extends Base\BaseModel
{
    use NodeTrait, Positionable, RequestSaver;

    protected $tableIdentif = 'AdminRolePermissionGroups';

    protected $fillable = [
        'parent_id', 'name', 'namespace', 'position'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $needsToSaveFromRequest = ['permissions'];

    public function __construct()
    {
        parent::__construct();

        /**
         * При сохранении нужно проверять, не изменилось ли имя, чтобы поменять namespace.
         */
        self::saving(function($item) {
            if ($item->attributeIsDirty('name') && !$item->attributeIsDirty('namespace')) {
                $item->namespace = $item->buildNamespace();
            }
        });

        /**
         * При измененнии namespace предка, меняем namespace потомков.
         */
        self::saved(function($item) {
            if (!$item->attributeIsDirty('namespace')) return;

            $childrens = $item->children;

            foreach ($childrens as $children) {
                $children->update([
                    'namespace' => $children->buildNamespace()
                ]);
            }
        });

        /**
         * Удаление прав удаляемых групп.
         */
        self::deleting(function($item) {
            foreach ($item->descendantsAndSelf($this->id) as $descendantOrSelf) {
                $descendantOrSelf->permissions()->delete();
            }
        });
    }

    public function permissions()
    {
        return $this->hasMany(AdminRolePermission::class, 'group_id');
    }

    // todo: аналогичный метод в аттрибутах

    protected function _savePermissions($permissionsData = [])
    {
        $currentPermissions = $this->permissions()->get();

        foreach ($currentPermissions as $currentPermission) {
            if (isset($permissionsData[$currentPermission->id])) {
                $currentPermission->saveFromRequestData($permissionsData[$currentPermission->id]);

                unset($permissionsData[$currentPermission->id]);
            }
            else {
                $currentPermission->delete();
            }
        }

        foreach ($permissionsData as $permissionData) {
            if (isset($permissionData['isNew']) && $permissionData['isNew']) {
                $permissionData['group_id'] = $this->id;

                (new AdminRolePermission)->saveFromRequestData($permissionData);
            }
        }
    }

    /**
     * Формирование namespace-а группы.
     *
     * @return string
     */
    protected function buildNamespace()
    {
        $namespace = lcfirst(preg_replace("/\s/", '', ucwords(preg_replace("/[^a-zA-Z]/", " ", $this->name))));

        if ($this->parent_id) {
            if ($parent = $this->parent) {
                $namespace = $parent->namespace . '.' . $namespace;
            }
        }

        return $namespace;
    }
}
