<?php

namespace App\Http\Requests;

class PriceTypeRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
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