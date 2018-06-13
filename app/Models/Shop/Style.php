<?php

namespace App\Models\Shop;

use App\Support\Traits\Models\StructureTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use MosseboShopCore\Models\Shop\Style as BaseStyle;

class Style extends BaseStyle implements HasMedia
{
    use StructureTrait;

    protected $fillable = [
        'parent_id',
        'slug',
        'enabled',
        'position'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $mediaCollectionName = 'image';

    protected $needsToSaveFromRequest = [
        'i18n',
        'images'
    ];

    public function productsRelations()
    {
        return $this->hasMany(StyleProduct::class, $this->relationFieldName);
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class, StyleProduct::class,
            $this->relationFieldName, 'id', 'id', 'product_id'
        );
    }
}