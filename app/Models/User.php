<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use MosseboShopCore\Models\Base\Authenticatable;

use Cog\Contracts\Love\Liker\Models\Liker as LikerContract;
use Cog\Laravel\Love\Liker\Models\Traits\Liker;

class User extends Authenticatable implements LikerContract
{
    use Liker, Notifiable;

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
