<?php

namespace App\Models\Shop;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\I18nTrait;
use MosseboShopCore\Models\Shop\Attribute as BaseAttribute;

class Attribute extends BaseAttribute
{
    use Positionable, StatusChangeable, RequestSaver, I18nTrait;

    protected $fillable = [
        'layout_class',
        'selectable',
        'enabled'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $needsToSaveFromRequest = [
        'i18n',
        'options'
    ];

    public function productRelations()
    {
        return $this->hasMany(ProductAttribute::class, $this->relationFieldName);
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            ProductAttribute::class,
            $this->relationFieldName,
            'id',
            'id',
            'product_id'
        );
    }

    public function options()
    {
        return $this->hasMany(AttributeOption::class, $this->relationFieldName);
    }

    protected function _saveOptions(Array $optionsData = [])
    {
        $currentOptions = $this->options()->get();

        foreach ($currentOptions as $currentOption) {
            if (isset($optionsData[$currentOption->id])) {
                $currentOption->saveFromRequestData($optionsData[$currentOption->id]);
                unset($optionsData[$currentOption->id]);
            }
            else {
                $currentOption->delete();
            }
        }

        foreach ($optionsData as $optionId => $optionData) {
            if (isset($optionData['isNew']) && $optionData['isNew']) {
                $optionData['attribute_id'] = $this->id;

                (new AttributeOption)->saveFromRequestData($optionData);
            }
        }
    }
}
