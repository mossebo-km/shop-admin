<?php

namespace App\Models\Shop\Attribute;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\I18nTrait;
use MosseboShopCore\Models\Shop\Attribute\AttributeOption as BaseAttributeOption;
use App\Models\Shop\Product\Product;
use App\Models\Shop\Product\ProductAttributeOption;

class AttributeOption extends BaseAttributeOption
{
    use StatusChangeable, RequestSaver, Positionable, I18nTrait;

    protected $needsToSaveFromRequest = [
        'i18n'
    ];

    public function attribute()
    {
        return $this->hasOne(Attribute::class, $this->relationFieldName);
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class, ProductAttributeOption::class,
            $this->relationFieldName, 'id', 'id', 'product_id'
        );
    }

    public function productRelations()
    {
        return $this->hasMany(ProductAttributeOption::class, $this->relationFieldName);
    }
}