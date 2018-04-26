<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceTypeSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
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