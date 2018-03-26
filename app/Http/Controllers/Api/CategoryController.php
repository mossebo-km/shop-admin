<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Events as Events;
use App\Models as Models;
use App\Models\Category;
use Validator;

use App\Http\Resources as Resources;

class CategoryController extends ApiController
{
    protected static $treeCacheKey = 'categoriesTree';
    protected static $categories;

    public function getBaseModel()
    {
        return Category::class;
    }

    /**
     * Список категорий.
     *
     * @param  Request
     * @return Array
     */
    public function index(Request $request)
    {
        return [
            'tree' => self::getTree(0, true),
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
            'category' => Resources\CategoryEditResource($category)
        ];
    }


    /*
        Изменение статуса.
    */

    public function status(Category $category)
    {
        $category->enabled = !$category->enabled;
        $category->save();

        \Event::fire(new Events\CategoryUpdated($category));

        return response()->json([
            'status' => 'success',
            'message' => $category->enabled ? "Категория #{$category->id} показана." : "Категория #{$category->id} скрыта."
        ], 201);
    }

    /*
        Проверка существования slug.
    */

    public function slugAvailable(Request $request)
    {
        return response()->json([
            'status' => Category::slugAvailableForTable($request->input('slug')) ? 'success' : 'error'
        ]);
    }

    public function categorySlugAvailable(Request $request, Product $category)
    {
        return response()->json([
            'status' => $category->slugAvailableForModel($request->input('slug')) ? 'success' : 'error'
        ]);
    }


    /*
        Обработка запроса на создание категории.
    */

    public function store(Request $request)
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

        /*

        */

        \Event::fire(new Events\CategoryCreate($category));

        return response()->json([
            'status' => 'success',
            'message' => 'Категория успешно создана.',
            'redirect' => "/categories/{$category->id}",
            'category' => Resources\CategoryEditResource($category)
        ], 200);
    }


    /*
        Изменение категории.
    */

    public function update(Request $request)
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

        \Event::fire(new Events\CategoryUpdated($category));

        return response()->json([
            'status' => 'success',
            'message' => 'Категория успешно изменена.',
            'category' => Resources\CategoryEditResource($category)
        ], 200);
    }

    public function handleIncomingData($data, $type = 'create', $callback)
    {
        try {
            $errors = $this->findDataErrors($data, $type);
        } catch (\Exception $e) {
            // dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1002). Обратитесь к разработчикам.'
            ], 500);
        }

        if ($errors) {
            return response()->json([
                'status' => 'error',
                'errors' => $errors
            ], 200);
        }

        if (is_callable($callback)) {
            return call_user_func($callback, $data);
        }

        return $data;
    }


    /*
        Валидация данных категории.
    */

    public function findDataErrors($data, $type = 'update')
    {
        if ($type === 'create') {
            Validator::extend('slugAvailable', function ($attribute, $value) {
                return !$this->_slugExist($value);
            });
        }

        Validator::extend('categoryExist', function ($attribute, $value) {
            return $this->_categoryExist($value);
        });

        $rules = [
            'slug' => "bail|trim|required|between:3,255" . ($type === 'create' ? '|slugAvailable' : ''),
            'enabled' => 'boolean',
            'parent_id' => 'bail|integer|categoryExist',
        ];

        $languages = Models\Language::where('enabled', 1)->get();

        foreach ($languages as $language) {
            if (!isset($data['i18'][$language['code']])) {
                if ($language['default']) {
                    throw new Exception("Отсутствует перевод категории для основного языка: {$language['code']}", 1);
                }

                continue;
            }

            $rules["i18.{$language['code']}.title"]            = 'bail|trim|required|max:255';
            $rules["i18.{$language['code']}.description"]      = 'bail|trim|max:65000';
            $rules["i18.{$language['code']}.meta_title"]       = 'bail|trim|max:255';
            $rules["i18.{$language['code']}.meta_description"] = 'bail|trim|max:65000';
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            $errors = [];

            foreach ($validator->errors()->messages() as $fieldName => $messages) {
                $errors[$fieldName] = $messages[0];
            }

            return $errors;
        }

        return false;
    }

    /*
        Удаление категории.
    */

    public function delete(Category $category)
    {
        $category->delete();

        return response()->json([
            'status' => 'success',
            'message' => "Категория #{$category->id} была удалена."
        ], 200);
    }


    /*
        Все категории.
    */

    public static function all()
    {
        return self::$categories ?: self::$categories = Category::withTranslate()->orderBy('position', 'asc')->get()->toArray();
    }


    /*
        Изменение позиции.
    */

    public function changePositions(Request $request)
    {
        try {
            $this->getBaseModel()::savePositions($request->input('ids'));

            \DB::transaction(function() use($ids) {
                foreach ($ids as $position => $id) {
                    Category::where('id', $id)->update(['position' => $position]);
                }
            });
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => "Техническая ошибка (9000). Обратитесь к разработчикам."
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => "Позиция сохранена."
        ], 201);
    }
}
