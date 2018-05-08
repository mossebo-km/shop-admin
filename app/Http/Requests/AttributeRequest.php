<?php

namespace App\Http\Requests;

use App\Models\AttributeOption;

class AttributeRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (! ($this->isStore() || $this->isUpdate())) {
            return [];
        }

        $rules = [
            'enabled' => 'boolean',
            'selectable' => 'nullable|boolean',
            'layout_class' => 'nullable|trim|max:255'
        ];

        foreach (\Languages::enabled() as $language) {
            $rules["i18n.{$language['code']}"]       = "required|array";
            $rules["i18n.{$language['code']}.title"] = 'bail|trim|required|max:255';
        }

        foreach ($this->input('options') as $optionId => $option) {
            if ($this->isUpdate()) {
                $existingAttributeOptionsIds = array_column(AttributeOption::where('attribute_id', $this->getId())->get(['id'])->toArray(), 'id');
            }
            else {
                $existingAttributeOptionsIds = [];
            }

            $rules["options.{$optionId}"] = [
                function($attribute, $optionData, $fail) use($optionId, $existingAttributeOptionsIds) {
                    $optionRules = [
                        "options.{$optionId}.position" => 'integer',
                        "options.{$optionId}.enabled" => 'boolean',
                    ];

                    if (isset($optionData['isNew']) && $optionData['isNew']) {
                        foreach (\Languages::enabled() as $language) {
                            $rules["options.{$optionId}.i18n.{$language['code']}.value"] = 'bail|trim|required|max:255';
                        }
                    }
                    else {
                        if (!in_array($optionId, $existingAttributeOptionsIds)) {
                            return $fail(\Lang::get("validation.attributes.options.exists", ['attribute' => "#{$optionId}"]));
                        }
                    }

                    $validator = \Validator::make($this->all(), $optionRules);

                    if ($validator->fails()) {
                        foreach ($validator->errors()->messages() as $fieldName => $messages) {
                            return $fail($messages[0]);
                        }
                    }
                }
            ];
        }

        return $rules;
    }
}
