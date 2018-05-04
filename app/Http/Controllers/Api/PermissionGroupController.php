<?php

namespace App\Http\Controllers\Api;

use App\Models\AdminRolePermissionGroup;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Http\Requests\PermissionGroupSaveRequest;
use App\Http\Resources\AdminPermissionGroupsTableResource;
use App\Http\Resources\AdminPermissionGroupEditResource;
use App\Events as Events;

class PermissionGroupController extends ApiController
{
    use Deleteable, PositionChangeable;

    protected static $modelClass = AdminRolePermissionGroup::class;

    // todo: дерево прогнать через ресурс
    /**
     * @return array
     */
    public function index()
    {
        return [
            'permission-groups' => self::$modelClass::get()->toTree(),
        ];
    }

    /**
     * Отображение группы прав.
     *
     * @param AdminRolePermissionGroup
     * @return array
     */
    public function show(AdminRolePermissionGroup $permissionGroup)
    {
        return [
            'permission-group' => new AdminPermissionGroupEditResource($permissionGroup)
        ];
    }

    /**
     * Создание группы прав.
     *
     * @param PermissionGroupSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PermissionGroupSaveRequest $request)
    {
        try {
            $permissionGroup = (new self::$modelClass())->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (2000). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\Entity\EntityCreated($permissionGroup));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('created', ['id' => $permissionGroup->id]),
            'redirect' => "/system/rbac/permission-groups/{$permissionGroup->id}",
//            'permission-group' => new AdminPermissionGroupEditResource($permissionGroup)
        ], 200);
    }

    /**
     * Изменение группы прав.
     *
     * @param PermissionGroupSaveRequest $request
     * @param AdminRolePermissionGroup $permissionGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PermissionGroupSaveRequest $request, AdminRolePermissionGroup $permissionGroup)
    {
        try {
            $permissionGroup->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1001). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\Entity\EntityUpdated($permissionGroup));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $permissionGroup->id]),
            'permission-group' => new AdminPermissionGroupEditResource($permissionGroup)
        ], 200);
    }

    // todo: Прогнать через ресурсы епта

    public function all()
    {
        return [
            'permission-groups' => self::$modelClass::with('permissions')->get()->toTree(),
        ];
    }
}