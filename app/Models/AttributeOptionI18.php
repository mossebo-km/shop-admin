<?php

namespace App\Models;

class AttributeOptionI18 extends Base\BaseModel
{
    protected $tableIdentif = 'AttributeOptionsI18';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'option_id', 'language_code', 'value'
    ];
}
