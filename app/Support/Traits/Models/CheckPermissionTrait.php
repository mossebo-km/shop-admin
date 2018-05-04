<?php

namespace App\Support\Traits\Models;

trait CheckPermissionTrait
{
    protected $permissions = [];

    public function isSuperAdmin()
    {
        return $this->id === 1 || $this->hasRole(1);
    }

    public function hasRole($roleId)
    {
        return $this->roleRelations()->where('admin_role_id', $roleId)->exists();
    }

    public function hasPermission($permissionNameOrId)
    {
        $permissions = $this->getPermissions();

        if (is_int($permissionNameOrId)){
            return isset($permissions[$permissionNameOrId]);
        }
        else {
            return in_array($permissionNameOrId, $permissions);
        }
    }

    public function getPermissions()
    {
        if ($this->permissions) {
            return $this->permissions;
        }

        $this->permissions = \Cache::remember('permissions' . get_class($this), 18000, function () {
            return $this->buildPermissions();
        });

        return $this->permissions;
    }

    protected function buildPermissions()
    {
        $roles = $this->roles()->with(['groups' => function($query) {
            return $query->with(['permissions' => function($query) {
                return $query->distinct('admin_role_permission_id');
            }]);
        }])->get();

        $permissions = [];

        foreach($roles as $role) {
            foreach ($role->groups as $group) {
                foreach ($group->permissions as $permission) {
                    $permissions[$permission->id] = $group->namespace . '.' . $permission->name;
                }
            }
        }

        return [];
    }
}