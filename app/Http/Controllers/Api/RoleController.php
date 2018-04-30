<?php

namespace App\Http\Controllers\Api;

use App\Models\Role;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Http\Requests\RoleSaveRequest;
use App\Http\Resources\RolesTableResource;
use App\Http\Resources\RoleEditResource;
use App\Events as Events;

class RoleController extends ApiController
{
    use Deleteable, PositionChangeable;

    protected static $modelClass = Role::class;

    /**
     * @return array
     */
    public function index()
    {
        return [
            'roles' => RolesTableResource::collection(self::$modelClass::all()),
        ];
    }

    /**
     * Отображение роли.
     *
     * @param Role
     * @return array
     */
    public function show(Role $role)
    {
        return [
            'role' => new RoleEditResource($role)
        ];
    }
}