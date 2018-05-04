<?php

namespace App\Http\Requests;

use App\Models\AdminRolePermission;
use App\Validation\ValidatorExtend;

class PermissionGroupSaveRequest extends ApiRequest
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
        $permissionGroupsTableName = \Config::get('migrations.AdminRolePermissionGroups');

        $rules = [
            'name' => 'nullable|trim|max:255',
            'parent_id' => ['bail', 'nullable', 'integer', "exists:{$permissionGroupsTableName},id"],
        ];

        if ($isUpdate = $this->isUpdate()) {
            $id = $this->getId();
            $modelName = 'App\Models\AdminRolePermissionGroups';
            ValidatorExtend::parentIdAvailable();

            $rules['parent_id'][] = "parent_id_available:{$modelName}," . $id;
        }

        foreach ($this->formRequest->input('permissions') as $permissionId => $permission) {
            if ($isUpdate) {
                $existingAttributeOptionsIds = array_column(AdminRolePermission::where('group_id', $id)->get(['id'])->toArray(), 'id');
            }
            else {
                $existingAttributeOptionsIds = [];
            }

            $rules["permissions.{$permissionId}"] = [
                function($attribute, $permissionData, $fail) use($permissionId, $existingAttributeOptionsIds) {
                    $permissionRules = [
                        "permissions.{$permissionId}.position" => 'integer',
                    ];

                    if (isset($permissionData['isNew']) && $permissionData['isNew']) {
                        $rules["permissions.{$permissionId}.name"] = 'bail|trim|required|max:255';
                    }
                    else {
                        if (!in_array($permissionId, $existingAttributeOptionsIds)) {
                            return $fail(\Lang::get("validation.permissions.exists", ['permission' => "#{$permissionId}"]));
                        }
                    }

                    $validator = \Validator::make($this->formRequest->all(), $permissionRules);

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
