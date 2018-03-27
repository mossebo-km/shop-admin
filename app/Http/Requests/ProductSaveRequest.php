<?php

namespace App\Http\Requests;

use App\Models as Models;
use App\Validation\ValidatorExtend;
use App\Repositories\LanguageRepository;
use App\Repositories\PriceTypeRepository;
use App\Repositories\CurrencyRepository;
use Illuminate\Http\Request;

class ProductSaveRequest extends ApiRequest
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
    public function rules(LanguageRepository $languages, PriceTypeRepository $priceTypes, CurrencyRepository $currencies)
    {
        ValidatorExtend::existsModelMany();

        if ($this->isCreate()) {
            ValidatorExtend::slugAvailable();
        }

        $rules = [
            'slug'       => "bail|trim|required|between:3,255" . ($this->isCreate() ? "|slug_available:\App\Models\Product" : ''),
            'enabled'    => 'boolean',
            'is_new'     => 'boolean',
            'is_popular' => 'boolean',
            'is_payable' => 'boolean',
            'categories' => "bail|exists_model_many:\App\Models\Category",
        ];

        foreach ($languages->enabled() as $language) {
            $rules["i18.{$language['code']}"]                  = "required|array";
            $rules["i18.{$language['code']}.title"]            = 'bail|trim|required|max:255';
            $rules["i18.{$language['code']}.description"]      = 'trim|max:65000';
            $rules["i18.{$language['code']}.meta_title"]       = 'trim|max:255';
            $rules["i18.{$language['code']}.meta_description"] = 'trim|max:65000';
        }

        foreach ($priceTypes->enabled() as $priceType) {
            foreach ($currencies->enabled() as $currency) {
                $rules["prices.{$priceType->id}.{$currency->code}"] = 'numeric';
            }
        }

        return $rules;
    }
}
