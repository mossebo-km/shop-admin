<?php

namespace App\Repositories;

use App\Contracts\Repositories\CategoryRepository as CategoryRepositoryContract;

class CategoryRepository extends RamRepository implements CategoryRepositoryContract
{
    protected $model = \App\Models\Category::class;

    protected $modificators = [
        'i18n', 'productCount'
    ];

    public function getTree($modificators)
    {
        return $this->getCollection($modificators)->toTree();
    }

    protected function _withI18n($query)
    {
        return $query->with('i18n');
    }

    protected function _withProductCount($query)
    {
        $categoriesTableName = \Config::get('migrations.Categories');
        $categoryProductsTableName = \Config::get('migrations.CategoryProducts');

        return $query->select(\DB::raw("\"{$categoriesTableName}\".*, count(\"{$categoryProductsTableName}\".\"product_id\") as \"products_count\""))
            ->leftJoin($categoryProductsTableName, "{$categoryProductsTableName}.category_id", '=', "{$categoriesTableName}.id")
            ->groupBy("{$categoriesTableName}.id");
    }

//    /**
//     * Создание дерева категорий.
//     *
//     * @param  integer $parentId
//     * @param  boolean $withDisabled
//     * @return array
//     */
//    private function _makeTree($parentId = 0, $withDisabled = false)
//    {
//        $categories = array_filter($this->getCollection()->toArray(), function($item) use($parentId, $withDisabled) {
//            if (!$withDisabled && $item['enabled'] == 0) {
//                return false;
//            }
//
//            return $item['parent_id'] == $parentId;
//        });
//
//        $list = [];
//
//        foreach ($categories as $category) {
//            $data = [
//                'id' => $category['id'],
//                'parent_id' => $category['parent_id'],
//                'slug' => $category['slug'],
//                'enabled' => $category['enabled'],
//                'i18n' => $category['i18n']
//            ];
//
//            if ($sub = $this->_makeTree($category['id'], $withDisabled)) {
//                $data['sub'] = $sub;
//            }
//
//            $list[] = $data;
//        }
//
//        return $list;
//    }

    public function getAllChildsIds($parentId = 0, &$acc = [])
    {
        $childrens = $this->getCollection()->where('parent_id', $parentId)->all();

        foreach ($childrens as $item) {
            $acc[] = $item->id;

            $this->getAllChildsIds($item->id, $acc);
        }

        return $acc;
    }
}