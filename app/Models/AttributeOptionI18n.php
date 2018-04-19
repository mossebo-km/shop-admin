<?php

namespace App\Models;

class AttributeOptionI18n extends Base\BaseModel
{
    protected $tableIdentif = 'AttributeOptionsI18n';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'option_id', 'language_code', 'value'
    ];
}
