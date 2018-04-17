<?php

namespace App\Http\Requests;

use App\Models\AttributeOption;

class AttributeSaveRequest extends ApiRequest
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
            'selectable' => 'nullable|boolean',
            'layout_class' => 'nullable|trim|max:255'
        ];

        foreach (\Languages::enabled() as $language) {
            $rules["i18.{$language['code']}"]       = "required|array";
            $rules["i18.{$language['code']}.title"] = 'bail|trim|required|max:255';
        }

        foreach ($this->formRequest->input('options') as $optionId => $option) {
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
                            $rules["options.{$optionId}.i18.{$language['code']}.value"] = 'bail|trim|required|max:255';
                        }
                    }
                    else {
                        if (!in_array($optionId, $existingAttributeOptionsIds)) {
                            return $fail(\Lang::get("validation.attributes.options.exists", ['attribute' => "#{$optionId}"]));
                        }
                    }

                    $validator = \Validator::make($this->formRequest->all(), $optionRules);

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
