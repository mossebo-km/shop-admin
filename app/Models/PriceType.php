<?php

namespace App\Models;

class PriceType extends Base\BaseModel
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $tableIdentif = 'PriceTypes';
}