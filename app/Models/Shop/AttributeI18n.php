<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\AttributeI18n as BaseAttributeI18n;

class AttributeI18n extends BaseAttributeI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'attribute_id',
        'language_code',
        'title'
    ];
}
