<?php

namespace App\Http\Controllers\Api;

use App\Models\AdminRole;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Http\Requests\RoleSaveRequest;
use App\Http\Resources\RolesTableResource;
use App\Http\Resources\RoleEditResource;
use App\Events as Events;

class RoleController extends ApiController
{
    use Deleteable, PositionChangeable;

    protected static $modelClass = AdminRole::class;

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
     * @param AdminRole
     * @return array
     */
    public function show(AdminRole $role)
    {
        return [
            'role' => new RoleEditResource($role)
        ];
    }

    /**
     * Создание роли.
     *
     * @param RoleSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(RoleSaveRequest $request)
    {
        try {
            $role = (new self::$modelClass())->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (2000). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\Entity\EntityCreated($role));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('created', ['id' => $role->id]),
            'redirect' => "/system/rbac/roles/{$role->id}",
//            'permission-group' => new AdminPermissionGroupEditResource($permissionGroup)
        ], 200);
    }

    /**
     * Изменение роли.
     *
     * @param RoleSaveRequest $request
     * @param AdminRole $permissionGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(RoleSaveRequest $request, AdminRole $role)
    {
        try {
            $role->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1001). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\Entity\EntityUpdated($role));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $role->id]),
            'role' => new RoleEditResource($role)
        ], 200);
    }
}