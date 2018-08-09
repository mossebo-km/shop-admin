<?php

namespace App\Models;

use MosseboShopCore\Models\Country as BaseCountry;

use App\Models\Shop\Currency;

class Country extends BaseCountry
{
    public function cities()
    {
        return $this->hasMany(City::class, 'country_code', 'code');
    }

    public function language()
    {
        return $this->hasOne(Language::class, 'code', 'language_code');
    }

    public function currency()
    {
        return $this->hasOne(Currency::class, 'code', 'currency_code');
    }
}
