<?php

namespace App\Http\Requests;

class SupplierRequest extends ApiRequest
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

        return [
            'name'        => 'bail|required|max:255',
            'description' => 'max:2048',
            'enabled'     => 'boolean',
        ];
    }
}