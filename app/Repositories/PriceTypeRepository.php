<?php

namespace App\Repositories;

use App\Contracts\Repositories\PriceTypeRepository as PriceTypeRepositoryContract;

class PriceTypeRepository extends RamRepository implements PriceTypeRepositoryContract
{
    protected $model = \App\Models\PriceType::class;

    protected function _getCollection() {
        return $this->model::with('i18n')->get();
    }
}