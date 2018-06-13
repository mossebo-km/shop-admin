<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\Currency as BaseCurrency;

class Currency extends BaseCurrency
{
    protected $fillable = [
        'code',
        'name',
        'symbol',
        'precision',
        'thousand_separator',
        'decimal_separator',
        'swap_currency_symbol'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class, 'currency_code');
    }
}