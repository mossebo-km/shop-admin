<?php

namespace App\Http\Controllers\Api;

use App\Events as Events;
use App\Models\Category;
use App\Http\Requests\CategorySaveRequest;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Support\Traits\Controllers\Sluggable;
use App\Http\Resources as Resources;

class CategoryController extends ApiController
{
    use Deleteable, StatusChangeable, Sluggable, PositionChangeable;

    protected static $modelClass = Category::class;

    /**
     * Список категорий.
     *
     * @return array
     */
    public function index()
    {
        return [
            'categories' => \Categories::getTree(),
        ];
    }

    /**
     * Отображение категории.
     *
     * @param  Category
     * @return array
     */
    public function show(Category $category)
    {
        return [
            'category' => new Resources\CategoryEditResource($category)
        ];
    }

    /**
     * Создание категории.
     *
     * @param CategorySaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategorySaveRequest $request)
    {
        try {
            $category = (new Category())->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1000). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\EntityCreated($category));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('created', ['id' => $category->id]),
            'redirect' => "/shop/categories/{$category->id}",
//            'category' => new Resources\CategoryEditResource($category)
        ], 200);
    }

    /**
     * Изменение категории.
     *
     * @param CategorySaveRequest $request
     * @param Category $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategorySaveRequest $request, Category $category)
    {
        try {
            $category->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1001). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\EntityUpdated($category));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $category->id]),
            'category' => new Resources\CategoryEditResource($category)
        ], 200);
    }
}