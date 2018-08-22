<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\ApiRequest;

use App\Validation\ValidatorExtend;
use App\Models\Shop\Attribute;
use App\Models\Shop\AttributeOption;
use App\Support\Traits\Requests\HasImages;

class ProductRequest extends ApiRequest
{
    use HasImages;

    protected $model = \App\Models\Shop\Product::class;
    protected $permissionsNamespace = 'shop.products';

    protected function getEntityRules()
    {
        ValidatorExtend::manyRecordsExists();

        $suppliersTableName = \Config::get('tables.Suppliers');

        $rules = [
            'supplier_id' => "bail|required|integer|exists:{$suppliersTableName},id",
            'enabled'     => 'boolean',
            'is_new'      => 'boolean',
            'is_popular'  => 'boolean',
            'is_payable'  => 'boolean',
            'categories'  => "nullable|many_records_exists:\App\Models\Shop\Category",
            'styles'      => "nullable|many_records_exists:\App\Models\Shop\Style",
            'rooms'       => "nullable|many_records_exists:\App\Models\Shop\Room",
            'related'     => [
                'nullable',
                'many_records_exists:\App\Models\Shop\Product',

                function($attribute, $value, $fail) {
                    if (! is_array($value)) {
                        $value = [$value];
                    }

                    if (in_array($this->id, $value)) {
                        return $fail(trans("validation.self_id"));
                    }
                }
            ],
            'width'       => 'bail|required|integer|min:0',
            'height'      => 'bail|required|integer|min:0',
            'length'      => 'bail|required|integer|min:0',
            'weight'      => 'bail|required|integer|min:0',
        ];

        foreach (\Languages::enabled() as $language) {
            $rules["i18n.{$language['code']}"]                  = "required|array";
            $rules["i18n.{$language['code']}.title"]            = 'bail|trim|required|max:255';
            $rules["i18n.{$language['code']}.description"]      = 'trim|max:65000';
            $rules["i18n.{$language['code']}.meta_title"]       = 'trim|max:255';
            $rules["i18n.{$language['code']}.meta_description"] = 'trim|max:65000';
        }

        foreach (\PriceTypes::enabled() as $priceType) {
            foreach (\Currencies::enabled() as $currency) {
                $rules["prices.{$priceType->id}.{$currency->code}"] = 'nullable|numeric|max:' . $currency->getMaxValue();
            }
        }

        /**
         * 1. Проверка на существование аттрибута.
         * 2. Далее проверка опций:
         *    2.1 Если опция уже существует - проверка существования ее id.
         *    2.2 Если не существует - проверка ввода.
         */
        if ($attributes = $this->input('attributes')) {
            $existingAttributeIds = array_column(Attribute::get(['id'])->toArray(), 'id');

            foreach ($attributes as $attributeId => $attributeOptions) {
                $rules["attributes.{$attributeId}"] = [
                    'bail', 'array',

                    function($attribute, $value, $fail) use($existingAttributeIds, $attributeId) {
                        if (! in_array($attributeId, $existingAttributeIds)) {
                            return $fail(trans("validation.attributes.exists", ['attribute' => $attributeId]));
                        }
                    },

                    function($attribute, $value, $fail) use($attributeId, $attributeOptions) {
                        $existingAttributeOptionsIds = array_column(AttributeOption::where('attribute_id', $attributeId)->get(['id'])->toArray(), 'id');

                        foreach ($attributeOptions as $optionId => $optionValue) {
                            if (is_array($optionValue)) {
                                foreach (\Languages::enabled() as $language) {
                                    $ruleName = "attributes.{$attributeId}.{$optionId}.{$language['code']}.value";

                                    $validator = \Validator::make($this->all(), [
                                        $ruleName => 'bail|trim|required|max:255',
                                    ]);

                                    if ($validator->fails()) {
                                        $fail($validator->errors()->first($ruleName));
                                    }
                                }
                            }
                            else {
                                if (! in_array($optionId, $existingAttributeOptionsIds)) {
                                    return $fail(\Lang::get("validation.attributes.options.exists", ['attribute' => $optionValue]));
                                }
                            }
                        }
                    }
                ];
            }
        }

        $this->setImagesRule($rules);

        return $rules;
    }
}