<?php

namespace App\Models;

class Language extends Base\BaseModel
{
    protected $tableIdentif = 'Languages';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
