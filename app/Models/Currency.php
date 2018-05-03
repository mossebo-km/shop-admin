<?php

namespace App\Models;

class Currency extends Base\BaseModel
{
    protected $tableIdentif = 'Currencies';

    protected $fillable = [
        'code', 'name', 'symbol', 'precision', 'thousand_separator', 'decimal_separator', 'swap_currency_symbol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class, 'currency_code', 'code');
    }

    /**
     *
     *
     * @return string
     */
    public function getMaxValue() {
        return 2147483647 / pow(10 , $this->precision);
    }
}