<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\LanguageRepository;
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
     * @param LanguageRepository $languages
     * @return array
     */
    public function rules(LanguageRepository $languages)
    {
        ValidatorExtend::recordExists();
        ValidatorExtend::parentIdAvailable();

        if ($this->isCreate()) {
            ValidatorExtend::slugAvailable();
        }

        $modelName = 'App\Models\Category';

        $rules = [
            'slug' => "bail|trim|required|between:3,255" . ($this->isCreate() ? "|slug_available:{$modelName}" : ''),
            'enabled' => 'boolean',
            'parent_id' => "bail|nullable|integer|parent_id_available:{$modelName}," . substr($this->formRequest->getPathinfo(), -1),
        ];

        foreach ($languages->enabled() as $language) {
            $rules["i18.{$language['code']}"]                  = "required|array";
            $rules["i18.{$language['code']}.title"]            = 'bail|trim|required|max:255';
            $rules["i18.{$language['code']}.description"]      = 'trim|max:65000';
            $rules["i18.{$language['code']}.meta_title"]       = 'trim|max:255';
            $rules["i18.{$language['code']}.meta_description"] = 'trim|max:65000';
        }

        return $rules;
    }
}