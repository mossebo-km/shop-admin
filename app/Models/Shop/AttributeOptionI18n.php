<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\AttributeOptionI18n as BaseAttributeOptionI18n;

class AttributeOptionI18n extends BaseAttributeOptionI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'option_id',
        'language_code',
        'value'
    ];
}
