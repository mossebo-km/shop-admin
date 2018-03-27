<?php

namespace App\Repositories;

use App\Contracts\Repositories\CategoryRepository as CategoryRepositoryContract;

class CategoryRepository extends RamRepository implements CategoryRepositoryContract
{
    protected $model = \App\Models\Category::class;

    public function getTree($parentId = 0, $withDisabled = false)
    {
        return $this->_makeTree($parentId, $withDisabled);
    }

    protected function _getCollection() {
        return $this->model::withTranslate()->orderBy('position', 'asc')->get();
    }

    protected function _getCacheKey()
    {
        return $this->cacheKey . 'ru';
    }

    /**
     * Создание дерева категорий.
     *
     * @param  integer $parentId
     * @param  boolean $withDisabled
     * @return Array
     */
    private function _makeTree($parentId = 0, $withDisabled = false)
    {
        $categories = array_filter($this->getCollection()->toArray(), function($item) use($parentId, $withDisabled) {
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

            if ($sub = $this->_makeTree($category['id'], $withDisabled)) {
                $data['sub'] = $sub;
            }

            $list[] = $data;
        }

        return $list;
    }
}