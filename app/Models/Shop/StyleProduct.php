<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\StyleProduct as BaseStyleProduct;

class StyleProduct extends BaseStyleProduct
{
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'style_id',
        'product_id'
    ];

    public $timestamps = false;

    public function style()
    {
        return $this->belongsTo(Style::class, 'style_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
