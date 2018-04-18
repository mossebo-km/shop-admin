<?php

namespace App\Models;

class AttributeI18n extends Base\BaseModel
{
    protected $tableIdentif = 'AttributesI18n';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'attribute_id', 'language_code', 'title'
    ];
}
