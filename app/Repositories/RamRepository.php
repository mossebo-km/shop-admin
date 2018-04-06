<?php

namespace App\Repositories;

use App\Contracts\Repositories\RamRepository as RamRepositoryContract;

class RamRepository implements RamRepositoryContract {

    protected $collection = null;

    protected $cacheKey = null;

    protected $model = null;

    protected $cacheMinutes = null;

    public function __construct()
    {
        if (is_null($this->cacheKey)) {
            $this->cacheKey = $this->model . 'RepositoryCache';
        }
    }

    public function getCollection()
    {
        if (is_null($this->collection)) {
            $this->collection = \Cache::remember($this->_getCacheKey(), $this->_getCachceMinutes(), function(){
                return $this->_getCollection();
            });
        }

        return $this->collection;
    }

    public function enabled()
    {
        return $this->getCollection()->where('enabled', 1);
    }

    protected function _getCollection()
    {
        return $this->model::all();
    }

    protected function _getCacheKey()
    {
        return $this->cacheKey;
    }

    protected function _getCachceMinutes()
    {
        return isset($this->cacheMinutes) ? $this->cacheMinutes : config('repository.cache.minutes', 30);
    }

    public function clearCache()
    {
        \Cache::forget($this->_getCacheKey());
        $this->collection = null;
    }

    public function __call($name, Array $params)
    {
        $collection = $this->getCollection();

        return call_user_func_array([$collection, $name], $params);
    }
}