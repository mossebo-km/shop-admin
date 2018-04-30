<?php

namespace App\Http\Requests;

use App\Validation\ValidatorExtend;
use Illuminate\Validation\Rule;

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
        $categoriesTableName = \Config::get('migrations.Categories');

        $rules = [
            'enabled' => 'boolean',
            'parent_id' => ['bail', 'nullable', 'integer', "exists:{$categoriesTableName},id"],
            'slug' => ['bail', 'trim', 'required', 'between:3,255']
        ];

        if ($this->isCreate()) {
            $rules['slug'][] = Rule::unique($categoriesTableName);
        }

        if ($this->isUpdate()) {
            $id = $this->getId();
            $modelName = 'App\Models\Category';
            ValidatorExtend::parentIdAvailable();

            $rules['slug'][] = Rule::unique($categoriesTableName)->ignore($id);
            $rules['parent_id'][] = "parent_id_available:{$modelName}," . $id;
        }

        foreach (\Languages::enabled() as $language) {
            $rules["i18n.{$language['code']}"]                  = "required|array";
            $rules["i18n.{$language['code']}.title"]            = 'bail|trim|required|max:255';
            $rules["i18n.{$language['code']}.description"]      = 'trim|max:65000';
            $rules["i18n.{$language['code']}.meta_title"]       = 'trim|max:255';
            $rules["i18n.{$language['code']}.meta_description"] = 'trim|max:65000';
        }

        return $rules;
    }
}