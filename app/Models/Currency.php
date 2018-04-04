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
    protected $hidden = [
        'deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class, 'currency_code', 'code');
    }
}