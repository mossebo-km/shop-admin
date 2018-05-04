<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRoleRelation extends Model
{
    protected $tableIdentif = 'AdminRoleRelations';
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'admin_id', 'admin_role_id'
    ];

    public $timestamps = false;

//    public function admins()
//    {
//        return $this->belongsTo(Admin::class, 'admin_id');
//    }
//
//    public function roles()
//    {
//        return $this->belongsTo(AdminRole::class, 'admin_role_id');
//    }
}
