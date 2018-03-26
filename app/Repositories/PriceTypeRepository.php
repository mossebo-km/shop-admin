<?php

namespace App\Repositories;

use App\Interfaces\Repositories\PriceTypeRepositoryInterface;

class PriceTypeRepository extends RamRepository implements PriceTypeRepositoryInterface
{
    protected $model = \App\Models\PriceType::class;
}