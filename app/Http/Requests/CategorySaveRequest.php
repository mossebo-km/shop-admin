<?php

namespace App\Http\Requests;

use App\Validation\ValidatorExtend;

class CategorySaveRequest extends ApiRequest
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
        ValidatorExtend::recordExists();

        if ($this->isCreate()) {
            ValidatorExtend::slugAvailable();
        }
        else {
            ValidatorExtend::parentIdAvailable();
        }

        $modelName = 'App\Models\Category';

        $rules = [
            'slug' => 'bail|trim|required|between:3,255' . ($this->isCreate() ? "|slug_available:{$modelName}" : ''),
            'enabled' => 'boolean',
            'parent_id' => "bail|nullable|integer|record_exists:{$modelName}" . ($this->isUpdate() ? "|parent_id_available:{$modelName}," . substr($this->formRequest->getPathinfo(), -1) : ''),
        ];

        foreach (\Languages::enabled() as $language) {
            $rules["i18.{$language['code']}"]                  = "required|array";
            $rules["i18.{$language['code']}.title"]            = 'bail|trim|required|max:255';
            $rules["i18.{$language['code']}.description"]      = 'trim|max:65000';
            $rules["i18.{$language['code']}.meta_title"]       = 'trim|max:255';
            $rules["i18.{$language['code']}.meta_description"] = 'trim|max:65000';
        }

        return $rules;
    }
}