<?php

namespace App\Models\Shop;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\I18nTrait;
use MosseboShopCore\Models\Shop\AttributeOption as BaseAttributeOption;

class AttributeOption extends BaseAttributeOption
{
    use StatusChangeable, RequestSaver, Positionable, I18nTrait;

    protected $fillable = [
        'attribute_id',
        'position',
        'enabled'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

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