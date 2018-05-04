<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRolePermissionRelation extends Model
{
    protected $tableIdentif = 'AdminRolePermissionRelations';
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'admin_role_id', 'admin_role_permission_group_id', 'admin_role_permission_id'
    ];

    public $timestamps = false;
}
