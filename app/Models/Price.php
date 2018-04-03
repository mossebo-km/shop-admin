<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\CurrenciesHandler;

class Price extends Base\BaseModel
{
    use SoftDeletes;

    protected $tableIdentif = 'Prices';

    protected $fillable = [
        'item_type', 'item_id', 'currency_code', 'price_type_id', 'value'
    ];

    protected $hidden = [
        'deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function products()
    {
        return $this->morphedByMany(Product::class, 'item');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_code', 'code');
    }

    public function getCurrency()
    {
        return \Currencies::where('code', $this->currency_code)->first();
    }

    public function getFormatted()
    {
        extract($this->getCurrency()->toArray(), EXTR_OVERWRITE);

        $price = number_format(
            $this->getValue(),
            $precision,
            $decimal_separator,
            $thousand_separator
        );

        $price = str_replace(('.' . str_pad('', $precision, '0')), '', $price);

        if ($swap_currency_symbol) {
            $price = "$price $symbol";
        }
        else {
            $price = "$symbol $price";
        }

        return $price;
    }

    public function getValue()
    {
        return $this->value / $this->getDivider();
    }

    /**
     * @return integer
     */
    public function getDivider()
    {
        return pow(10, $this->getCurrency()['precision']);
    }


    /**
     * Так как значение цены хранится в integer, надо добавить используемое в валюте количество знаков после запятой.
     * @param  Array|array
     * @return bool
     */
    public function save(Array $options = []): bool
    {
        if ($this->value) {
            $this->value = $this->value * $this->getDivider();
        }

        return parent::save($options);
    }
}