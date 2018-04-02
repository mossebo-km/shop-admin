<?php

namespace App\Http\Requests;

class SupplierSaveRequest extends ApiRequest
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
        return [
            'name'        => 'bail|required|max:255',
            'description' => 'max:2048',
            'enabled'     => 'boolean',
        ];
    }
}
