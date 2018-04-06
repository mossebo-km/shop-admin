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

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
