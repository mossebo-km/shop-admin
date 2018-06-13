<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\PriceTypeI18n as BasePriceTypeI18n;

class PriceTypeI18n extends BasePriceTypeI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'price_type_id',
        'language_code',
        'title',
        'description'
    ];
}
