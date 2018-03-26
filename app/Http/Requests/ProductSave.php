<?php

namespace App\Http\Requests;

use App\Models as Models;
use App\Validation\ValidatorExtend;

class ProductSave extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->model = $this->route('product');

        if ($this->can('update')) {

        }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        ValidatorExtend::existsModelMany();

        if ($this->isCreate()) {
            ValidatorExtend::slugAvailable();
        }

        $modelName = '\App\Models\Category';

        $rules = [
            'slug'       => "bail|trim|required|between:3,255" . ($this->isCreate() ? "|slug_available:{$modelName}" : ''),
            'enabled'    => 'boolean',
            'is_new'     => 'boolean',
            'is_popular' => 'boolean',
            'is_payable' => 'boolean',
            'categories' => "bail|exists_model_many:{$modelName}",
        ];

        foreach (Models\Language::enabled() as $language) {
            $rules["i18.{$language['code']}"]                  = "required|array";
            $rules["i18.{$language['code']}.title"]            = 'bail|trim|required|max:255';
            $rules["i18.{$language['code']}.description"]      = 'trim|max:65000';
            $rules["i18.{$language['code']}.meta_title"]       = 'trim|max:255';
            $rules["i18.{$language['code']}.meta_description"] = 'trim|max:65000';
        }

        foreach (Models\PriceType::enabled() as $priceType) {
            foreach (Models\Currency::enabled() as $currency) {
                $rules["prices.{$priceType->id}.{$currency->code}"] = 'numeric';
            }
        }

        return $rules;
    }
}
