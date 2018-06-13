<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\ProductI18n as BaseProductI18n;

class ProductI18n extends BaseProductI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'product_id',
        'language_code',
        'title',
        'description',
        'meta_title',
        'meta_description'
    ];
}