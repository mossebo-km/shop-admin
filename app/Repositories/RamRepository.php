<?php

namespace App\Repositories;

use App\Interfaces\Repositories\RamRepositoryInterface;

class RamRepository implements RamRepositoryInterface {

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

    public function getCollection() {
        if (is_null($this->collection)) {
            $this->collection = \Cache::remember($this->cacheKey, $this->getCachceMinutes(), function () {
                return $this->model::all();
            });
        }

        return $this->collection;
    }

    public function getCachceMinutes()
    {
        return isset($this->cacheMinutes) ? $this->cacheMinutes : config('repository.cache.minutes', 30);
    }

    public function clearCache()
    {
        \Cache::forget($this->cacheKey);
    }

    public function __call($name, Array $params)
    {
        $collection = $this->getCollection();

        return call_user_func_array([$collection, $name], $params);
    }
}