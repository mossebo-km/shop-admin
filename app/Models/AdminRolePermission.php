<?php

namespace App\Models;

use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\RequestSaver;

class AdminRolePermission extends Base\BaseModel
{
    use RequestSaver, Positionable;

    /**
     * Идентификатор таблицы.
     *
     * @var string
     */
    protected $tableIdentif = 'AdminRolePermissions';

    /**
     * Поля пригодные для заполнения.
     *
     * @var array
     */
    protected $fillable = [
        'group_id', 'name', 'position',
    ];

    /**
     * Атрибуты, которые должны быть преобразованы в даты.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Данные, которые необходимо сохранить из запроса.
     *
     * @var array
     */
    public function group()
    {
        return $this->hasOne(AdminRolePermissionGroup::class, 'group_id');
    }
}
