<?php

namespace App\Models;

class AdminRole extends Base\BaseModel
{
    protected $tableIdentif = 'AdminRoles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

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
}
