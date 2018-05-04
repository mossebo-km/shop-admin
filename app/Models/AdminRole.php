<?php

namespace App\Models;

use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\RequestSaver;

class AdminRole extends Base\BaseModel
{
    use Positionable, RequestSaver;

    protected $tableIdentif = 'AdminRoles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'importance', 'position'
    ];

    protected $needsToSaveFromRequest = ['permissions'];

    public function admins()
    {
        return $this->hasManyThrough(
            Admin::class,
            AdminRoleRelation::class,
            'admin_id',
            'admin_role_id',
            'id',
            'id'
        );
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class, CategoryProduct::class,
            'category_id', 'id', 'id', 'product_id'
        );
    }

    public function groups()
    {
        return $this->hasManyThrough(
            AdminRolePermissionGroup::class, AdminRolePermissionRelation::class,
            'admin_role_id',  'id', 'id', 'admin_role_permission_group_id'
        );
    }

    public function permissions()
    {
        return $this->hasManyThrough(
            AdminRolePermission::class, AdminRolePermissionRelation::class,
            'admin_role_permission_id', 'id', 'id', 'admin_role_id'
        );
    }

    public function permissionRelations()
    {
        return $this->hasMany(AdminRolePermissionRelation::class, 'admin_role_id');
    }

    public function _savePermissions($permissionsIds = [])
    {
        $this->permissionRelations()->delete();

        if (empty($permissionsIds)) {
            return;
        }

        $permissions = AdminRolePermission::whereIn('id', $permissionsIds)->get();

        foreach ($permissions as $permission) {
            AdminRolePermissionRelation::create([
               'admin_role_id' => $this->id,
               'admin_role_permission_group_id' => $permission->group_id,
               'admin_role_permission_id' => $permission->id
            ]);
        }
    }
}
