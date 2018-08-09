<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\PromoCode as BasePromoCode;

class PromoCode extends BasePromoCode
{
    public function conditions()
    {
        return $this->hasMany(PromoCondition::class, $this->relationFieldName, 'id');
    }

    public function uses()
    {
        return $this->hasMany(PromoUse::class, $this->relationFieldName, 'id');
    }
}