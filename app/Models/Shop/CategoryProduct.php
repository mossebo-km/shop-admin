<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\CategoryProduct as BaseCategoryProduct;

class CategoryProduct extends BaseCategoryProduct
{
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'category_id',
        'product_id'
    ];

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
