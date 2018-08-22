<?php

namespace App\Models\Shop\Promo;

use MosseboShopCore\Models\Shop\Promo\PromoCondition as BasePromoCondition;

class PromoCondition extends BasePromoCondition
{
    public $timestamps = false;

    protected $fillable = [
        'type',
        'params',
        'promo_code_id',
    ];

    public function code()
    {
        return $this->hasOne(PromoCode::class, 'id', 'promo_code_id');
    }
}