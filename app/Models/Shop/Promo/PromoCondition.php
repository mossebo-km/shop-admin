<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\PromoCondition as BasePromoCondition;

class PromoCondition extends BasePromoCondition
{
    public function code()
    {
        return $this->hasOne(PromoCode::class, 'id', 'promo_code_id');
    }
}