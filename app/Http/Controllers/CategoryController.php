<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events as Events;
use App\Models as Models;
use App\Models\Category;
use App\Http\Collectors\Admin\ProductDataAdminCollector;
use Validator;

class CategoryController extends Controller
{
    protected static $treeCacheKey = 'categoriesTree';
    protected static $categories;


    /*
        Список категорий.
    */

    public function index(Request $request)
    {
        return [
            'tree' => self::getTree(0, true),
        ];
    }


    /*
        Отображение категории.
    */

    public function show(Category $category)
    {
        return [
            'category' => $this->_prepareBeforeShow($category)
        ];
    }

    private function _prepareBeforeShow(Category $category)
    {
        $data = $category->toArray();

        $data['i18'] = [];

        foreach ($category->i18()->get() as $item) {
            $languageCode = $item['language_code'];
            unset($item['language_code']);

            $data['i18'][$languageCode] = $item;
        }

        return $data;
    }


    /*
        Изменение статуса.
    */

    public function status(Category $category)
    {
        $category->enabled = !$category->enabled;
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => $category->enabled ? "Категория #{$category->id} показана." : "Категория #{$category->id} скрыта."
        ], 201);
    }

    /*
        Проверка существования slug.
    */

    public function slugExist(Request $request)
    {
        return response()->json([
            'status' => $this->_slugExist($request->input('slug'), $request->input('id')) ? 'error' : 'success'
        ]);
    }


    /*
        Проверка существования slug.
    */

    private function _slugExist($slug, $excludedId = false)
    {
        $query = Category::where('slug', $slug);

        if ($excludedId !== false) {
            $query->where('id', '!=', $excludedId);
        }

        return $query->exists();
    }

    /*
        Проверка существования категории
    */

    private function _categoryExist($id)
    {
        if ((int)$id === 0) return true;

        return Category::where('id', $id)->exists();
    }


    /*
        Сборных подходящих данных.
    */

    private function getFillableData($data)
    {
        $fillable = (new Category())->getFillable();

        return array_filter($data, function($key) use($fillable){
            return in_array($key, $fillable);
        }, ARRAY_FILTER_USE_KEY);
    }


    /*
        Обработка запроса на создание категории.
    */

    public function store(Request $request)
    {
        /*
            Потому что я могу.
        */

        return $this->handleIncomingData($request->all(), 'create', function($data) {
            try {
                $category = \DB::transaction(function() use($data) {
                    $category = new Category($this->getFillableData($data));
                    $category->save();

                    $this->setTranslates($category, $data['i18']);

                    return $category;
                });
            }
            catch (\Exception $e) {
                // dd($e);
                return response()->json([
                    'status' => 'error',
                    'message' => 'Техническая ошибка (100). Обратитесь к разработчикам.'
                ], 500);
            }

            /*

            */

            \Event::fire(new Events\CategoryCreate($category));

            return response()->json([
                'status' => 'success',
                'message' => 'Категория успешно создана.',
                'redirect' => "/categories/{$category->id}",
                'category' => $this->_prepareBeforeShow($category)
            ], 200);
        });
    }


    /*
        Изменение категории.
    */

    public function update(Request $request)
    {
        return $this->handleIncomingData($request->all(), 'update', function($data) {
            $category = Category::where('id', $data['id'])->first();

            if (! ($category && $category->exists())) {
                // Если удалена - редиректим на список.
                return response()->json([
                    'status' => 'error',
                    'message' => 'Категория была удалена до внесения изменений.',
                    'redirect' => '/categories'
                ]);
            }

            try {
                \DB::transaction(function() use($category, $data) {
                    $category->update($this->getFillableData($data));
                    $this->setTranslates($category, $data['i18']);
                });
            }
            catch (\Exception $e) {
                // dd($e);
                return response()->json([
                    'status' => 'error',
                    'message' => 'Техническая ошибка (101). Обратитесь к разработчикам.'
                ], 500);
            }

            \Event::fire(new Events\CategoryUpdated($category));

            return response()->json([
                'status' => 'success',
                'message' => 'Категория успешно изменена.',
                'category' => $this->_prepareBeforeShow($category)
            ], 200);
        });
    }

    public function handleIncomingData($data, $type = 'create', $callback)
    {
        try {
            $errors = $this->findDataErrors($data, $type);
        } catch (\Exception $e) {
            // dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (102). Обратитесь к разработчикам.'
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


    protected function setTranslates(Category $category, Array $translates = [])
    {
        foreach ($translates as $languageCode => $i18Data) {
            $i18Data = array_filter($i18Data, function($element) {
                return $element !== null;
            });

            $i18Data['language_code'] = $languageCode;

            $translate = new Models\CategoryI18($i18Data);

            $category->i18()->where('language_code', $languageCode)->delete();
            $category->i18()->save($translate);
        }
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
        Получение дерева категорий.
    */

    public static function getTree($parentId = 0, $withDisabled = false)
    {
        return self::_makeTree($parentId, $withDisabled);
    }


    /*
        Формирование ключа для кэша.
    */

    private static function _getTreeCacheKey($parentId)
    {
        return self::$treeCacheKey . 'ru' . $parentId;
    }


    /*
        Создание дерева категорий.
    */

    private static function _makeTree($parentId = 0, $withDisabled = false)
    {
        $categories = array_filter(self::all(), function($item) use($parentId, $withDisabled) {
            if (!$withDisabled && $item['enabled'] == 0) {
                return false;
            }

            return $item['parent_id'] == $parentId;
        });

        $list = [];

        foreach ($categories as $category) {
            $data = [
                'id' => $category['id'],
                'parent_id' => $category['parent_id'],
                'slug' => $category['slug'],
                'title' => $category['title'],
                'enabled' => $category['enabled'],
            ];

            if ($sub = self::_makeTree($category['id'], $withDisabled)) {
                $data['sub'] = $sub;
            }

            $list[] = $data;
        }

        return $list;
    }


    /*
        Изменение позиции.
    */

    public function changePositions(Request $request)
    {
        $ids = $request->input('ids');

        try {
            \DB::transaction(function() use($ids) {
                foreach ($ids as $position => $id) {
                    Category::where('id', $id)->update(['position' => $position]);
                }
            });
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => "Техническая ошибка (110). Обратитесь к разработчикам."
            ], 201);
        }

        return response()->json([
            'status' => 'success',
            'message' => "Позиция сохранена."
        ], 201);
    }
}
