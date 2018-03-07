<?php

namespace App\Models;

use Illuminate\Support\Facades\Redis;

class Currency extends Base\BaseModel
{
    protected $tableIdentif = 'Currencies';

    protected $fillable = [
        'code', 'name', 'symbol', 'precision', 'thousand_separator', 'decimal_separator', 'swap_currency_symbol'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class, 'currency_code', 'code');
    }
}