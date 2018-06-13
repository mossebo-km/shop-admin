<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\ApiRequest;

use App\Validation\ValidatorExtend;
use Illuminate\Validation\Rule;
use App\Support\Traits\Requests\HasImages;

class CategoryRequest extends ApiRequest
{
    use HasImages;

    protected $model = \App\Models\Shop\Category::class;
    protected $permissionsNamespace = 'shop.categories';

    protected function getEntityRules()
    {
        $tableName = \Config::get('tables.Categories');

        $rules = [
            'enabled' => 'boolean',
            'parent_id' => ['bail', 'nullable', 'integer', "exists:{$tableName},id"],
            'slug' => ['bail', 'trim', 'required', 'between:3,255']
        ];

        if ($this->isStore()) {
            $rules['slug'][] = Rule::unique($tableName);
        }

        if ($this->isUpdate()) {
            $id = $this->getId();
            ValidatorExtend::parentIdAvailable();

            $rules['slug'][] = Rule::unique($tableName)->ignore($id);
            $rules['parent_id'][] = "parent_id_available:{$this->model}," . $id;
        }

        foreach (\Languages::enabled() as $language) {
            $rules["i18n.{$language['code']}"]                  = "required|array";
            $rules["i18n.{$language['code']}.title"]            = 'bail|trim|required|max:255';
            $rules["i18n.{$language['code']}.description"]      = 'trim|max:65000';
            $rules["i18n.{$language['code']}.meta_title"]       = 'trim|max:255';
            $rules["i18n.{$language['code']}.meta_description"] = 'trim|max:65000';
        }

        $this->setImagesRule($rules);

        return $rules;
    }
}