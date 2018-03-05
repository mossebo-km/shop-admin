<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'code', 'name', 'symbol', 'precision', 'thousand_separator', 'decimal_separator', 'swap_currency_symbol'
    ];

    public function __construct(Array $attr = [])
    {
        parent::__construct($attr);

        $this->table = \Config::get('migrations.Currencies');
    }

    public function prices()
    {
        return $this->hasMany(Price::class, 'currency_code', 'code');
    }
}