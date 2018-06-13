<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\ApiRequest;

use Illuminate\Validation\Rule;
use App\Support\Traits\Requests\HasImages;

class StyleRequest extends ApiRequest
{
    use HasImages;

    protected $model = \App\Models\Shop\Style::class;
    protected $permissionsNamespace = 'shop.styles';

    protected function getEntityRules()
    {
        $tableName = \Config::get('tables.Styles');

        $rules = [
            'enabled' => 'boolean',
            'slug' => ['bail', 'trim', 'required', 'between:3,255']
        ];

        if ($this->isStore()) {
            $rules['slug'][] = Rule::unique($tableName);
        }
        else {
            $rules['slug'][] = Rule::unique($tableName)->ignore($this->getId());
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