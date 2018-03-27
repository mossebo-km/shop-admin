<?php

namespace App\Repositories;

use App\Contracts\Repositories\CurrencyRepository as CurrencyRepositoryContract;

class CurrencyRepository extends RamRepository implements CurrencyRepositoryContract
{
    protected $model = \App\Models\Currency::class;

    protected function _getCollection() {
        return $this->model::orderBy('position', 'asc')->get();
    }
}