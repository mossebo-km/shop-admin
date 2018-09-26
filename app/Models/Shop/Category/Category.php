<?php

namespace App\Models\Shop\Category;

use App\Support\Traits\Models\StructureTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use MosseboShopCore\Models\Shop\Category\Category as BaseCategory;
use App\Models\Shop\Product\Product;
use App\Models\Shop\Product\ProductCount;

class Category extends BaseCategory implements HasMedia
{
    use StructureTrait;

    protected $mediaCollectionName = 'image';

    protected $needsToSaveFromRequest = [
        'i18n',
        'images'
    ];

    public function productsRelations()
    {
        return $this->hasMany(CategoryProduct::class, $this->relationFieldName);
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class, CategoryProduct::class,
            $this->relationFieldName, 'id', 'id', 'product_id'
        );
    }

    public function productCounts()
    {
        return $this->hasMany(ProductCount::class, $this->relationFieldName);
    }
}