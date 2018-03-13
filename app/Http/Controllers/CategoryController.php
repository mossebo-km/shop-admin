<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as Models;
use App\Models\Category;
use App\Http\Collectors\Admin\ProductDataAdminCollector;

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
        Создание категории.
    */

    public function store()
    {
        $category = Category::create($request->all());

        return response()->json($category, 201);
    }


    /*
        Изменение категории.
    */

    public function update(Category $category)
    {
        $category->update($request->all());

        return response()->json($category, 200);
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
        return self::$categories ?: self::$categories = Category::orderBy('position', 'asc')->get()->toArray();
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


    /*
        Отображение категории.
    */

    public function show(Category $category)
    {
        // $this->_connectPrices($product);
        // $this->_connectCategories($product);
        // $this->_connectImages($product);

        // $data = [
        //     'product' => $product,
        //     'categories' => $this->_getCategories(),
        //     'currencies' => $this->_getCurrencies(),
        // ];

        return $category;
    }
}
