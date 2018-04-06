<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $tableIdentif = 'Roles';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'description', 'position'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function admins()
    {
        return $this->hasMany(Admin::class, 'role_id');
    }
}