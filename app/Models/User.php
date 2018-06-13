<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use MosseboShopCore\Models\Base\Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
