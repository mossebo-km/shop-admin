<?php

namespace App\Models;

class AttributeI18 extends Base\BaseModel
{
    protected $tableIdentif = 'AttributesI18';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'attribute_id', 'language_code', 'title'
    ];
}
