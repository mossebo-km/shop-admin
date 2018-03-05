<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'item_type', 'item_id', 'currency_code', 'price_type_id', 'value'
    ];

    public function __construct(Array $attr = [])
    {
        parent::__construct($attr);

        $this->table = \Config::get('migrations.Prices');
    }


    public function item()
    {
        return $this->morphTo();
    }


    public function products()
    {
        return $this->morphedByMany(Product::class, 'item');
    }


    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_code', 'code');
    }


    public function display()
    {
        extract($this->currency->toArray(), EXTR_OVERWRITE);
        $price = number_format($this->value, $precision, $decimal_separator, $decimal_separator);

        $price = str_replace(('.' . str_pad('', $precision, '0')), '', $price);

        if ($swap_currency_symbol) {
            $price = "$price $symbol";
        }
        else {
            $price = "$symbol $price";
        }

        return $price;
    }
}