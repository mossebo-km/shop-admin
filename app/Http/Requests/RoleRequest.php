<?php

namespace App\Http\Requests;

class RoleRequest extends ApiRequest
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
            //
        ];
    }
}
