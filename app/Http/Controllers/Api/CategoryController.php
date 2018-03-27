<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Events as Events;
use App\Models as Models;
use App\Models\Category;
use Validator;
use App\Contracts\Repositories\CategoryRepository;
use App\Http\Requests\CategorySaveRequest;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\Sluggable;
use App\Support\Traits\Controllers\PositionChangeable;


use App\Http\Resources as Resources;

class CategoryController extends ApiController
{
    use StatusChangeable, Deleteable, Sluggable, PositionChangeable;

    protected static $modelClass = Category::class;

    /**
     * Список категорий.
     *
     * @param  Request
     * @return Array
     */
    public function index(CategoryRepository $categoryRepository)
    {
        return [
            'tree' => $categoryRepository->getTree(),
        ];
    }

    /**
     * Отображение категории.
     *
     * @param  Category
     * @return Array
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
     * @param  CategorySaveRequest
     * @return Repsonse
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
            'redirect' => "/categories/{$category->id}",
            'category' => new Resources\CategoryEditResource($category)
        ], 200);
    }


    /*
        Изменение категории.
    */

    /**
     * Создание категории.
     *
     * @param  CategorySaveRequest
     * @param  Category
     * @return Repsonse
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
            'category' => Resources\CategoryEditResource($category)
        ], 200);
    }
}
