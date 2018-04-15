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
        return $this->model::with('i18')->orderBy('position', 'asc')->get();
    }

    protected function _getCacheKey()
    {
        return $this->cacheKey;
    }

    /**
     * Создание дерева категорий.
     *
     * @param  integer $parentId
     * @param  boolean $withDisabled
     * @return array
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
                'enabled' => $category['enabled'],
                'i18' => $category['i18']
            ];

            if ($sub = $this->_makeTree($category['id'], $withDisabled)) {
                $data['sub'] = $sub;
            }

            $list[] = $data;
        }

        return $list;
    }

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