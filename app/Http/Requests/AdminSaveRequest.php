<?php

namespace App\Http\Requests;

use App\Validation\ValidatorExtend;
use Illuminate\Validation\Rule;

class AdminSaveRequest extends ApiRequest
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
        // todo: добавить проверку изображения, ролей

        $adminsTableName = \Config::get('migrations.Admins');

        $rules = [
            'name'        => 'bail|trim|required|max:255',
            'email'       => ['bail', 'trim', 'required', 'email', 'max:255'],
            'enabled'     => 'boolean',
        ];


        if ($this->isCreate()) {
            $rules['email'][] = Rule::unique($adminsTableName);
        }

        if ($this->isUpdate()) {
            $rules['email'][] = Rule::unique($adminsTableName)->ignore($this->getId());
        }

        return $rules;
    }
}
