<?php

namespace App\Http\Controllers\Api;

use App\Events as Events;
use App\Models\Admin;
use App\Http\Requests\AdminSaveRequest;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\ImageUploadable;
use App\Http\Resources as Resources;

class AdminController extends ApiController
{
    use Deleteable, StatusChangeable, ImageUploadable;

    protected static $modelClass = Admin::class;

    /**
     * Список категорий.
     *
     * @return array
     */
    public function index()
    {
        return [
            'admins' => Resources\AdminsTableResource::collection(Admin::get()),
        ];
    }

    /**
     * Отображение категории.
     *
     * @param Admin
     * @return array
     */
    public function show(Admin $admin)
    {
        return [
            'admin' => new Resources\AdminEditResource($admin)
        ];
    }

    /**
     * Создание категории.
     *
     * @param AdminSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AdminSaveRequest $request)
    {
        try {
            $admin = (new Admin())->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1000). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\Entity\EntityCreated($admin));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('created', ['id' => $admin->id]),
            'redirect' => "/shop/admins/{$admin->id}",
//            'admin' => new Resources\AdminEditResource($category)
        ], 200);
    }

    /**
     * Изменение категории.
     *
     * @param AdminSaveRequest $request
     * @param Admin $admin
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AdminSaveRequest $request, Admin $admin)
    {
        try {
            $admin->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1001). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\Entity\EntityUpdated($admin));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $admin->id]),
            'admin' => new Resources\AdminEditResource($admin)
        ], 200);
    }

    public function avatar()
    {
//        return Auth::guard('admin.web')
    }
}
