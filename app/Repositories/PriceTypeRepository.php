<?php

namespace App\Repositories;

use App\Contracts\Repositories\PriceTypeRepository as PriceTypeRepositoryContract;

class PriceTypeRepository extends RamRepository implements PriceTypeRepositoryContract
{
    protected $model = \App\Models\PriceType::class;
}