<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\Price as BasePrice;

class Price extends BasePrice
{
    protected $fillable = [
        'item_type', 'item_id', 'currency_code', 'price_type_id', 'value'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function type()
    {
        return $this->hasOne(PriceType::class, 'price_type_id');
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'item');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_code', 'code');
    }

    /**
     *
     * Так как значение цены хранится в integer, надо добавить используемое в валюте количество знаков после запятой.
     * @param  array|array
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