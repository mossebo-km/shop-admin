<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\ApiRequest;

class PriceTypeRequest extends ApiRequest
{
    protected $model = \App\Models\Shop\PriceType::class;
    protected $permissionsNamespace = 'shop.price-types';

    protected function getEntityRules()
    {
        $rules = [
            'enabled' => 'boolean',
        ];

        foreach (\Languages::enabled() as $language) {
            $rules["i18n.{$language['code']}"]             = "required|array";
            $rules["i18n.{$language['code']}.title"]       = 'bail|trim|required|max:255';
            $rules["i18n.{$language['code']}.description"] = 'trim|max:65000';
        }

        return $rules;
    }
}