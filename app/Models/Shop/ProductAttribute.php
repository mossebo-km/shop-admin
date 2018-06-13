<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\ProductAttribute as BaseProductAttribute;

class ProductAttribute extends BaseProductAttribute
{
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'product_id',
        'attribute_id'
    ];

    public $timestamps = false;

    public function attributes()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}