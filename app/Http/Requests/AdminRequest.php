<?php

namespace App\Http\Requests;

use App\Validation\ValidatorExtend;
use Illuminate\Validation\Rule;

class AdminRequest extends ApiRequest
{
    // todo: хорошенечко подумать, с чего это вдруг мне надо каждый раз делать проверку "! ($this->isStore() || $this->isUpdate())"
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

        // todo: добавить проверку изображения, ролей

        $adminsTableName = \Config::get('migrations.Admins');

        $rules = [
            'name'    => 'bail|trim|required|max:255',
            'email'   => ['bail', 'trim', 'required', 'email', 'max:255'],
            'enabled' => 'boolean',
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
