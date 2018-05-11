<?php

namespace App\Http\Requests;

class SupplierRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function getEntityRules()
    {
        return [
            'name'        => 'bail|required|max:255',
            'description' => 'max:2048',
            'enabled'     => 'boolean',
        ];
    }
}