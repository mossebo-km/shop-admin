<?php

namespace App\Models\Shop\Promo;

use MosseboShopCore\Models\Shop\Promo\PromoCodeI18n as BasePromoCodeI18n;

class PromoCodeI18n extends BasePromoCodeI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'promo_code_id',
        'language_code',
        'title',
        'description',
    ];
}
