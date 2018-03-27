<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\LanguageRepository;

class CategorySaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        ValidatorExtend::existsModel();

        if ($this->isCreate()) {
            ValidatorExtend::slugAvailable();
        }

        $modelName = 'App\Models\Category';

        $rules = [
            'slug' => "bail|trim|required|between:3,255" . ($this->isCreate() ? "|slug_available:{$modelName}" : ''),
            'enabled' => 'boolean',
            'parent_id' => 'bail|integer|exists_model:{$modelName}',
        ];

        foreach (LanguageRepository::enabled() as $language) {
            $rules["i18.{$language['code']}"]                  = "required|array";
            $rules["i18.{$language['code']}.title"]            = 'bail|trim|required|max:255';
            $rules["i18.{$language['code']}.description"]      = 'trim|max:65000';
            $rules["i18.{$language['code']}.meta_title"]       = 'trim|max:255';
            $rules["i18.{$language['code']}.meta_description"] = 'trim|max:65000';
        }

        return $rules;
    }
}