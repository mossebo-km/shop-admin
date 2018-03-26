<?php

namespace App\Repositories;

use App\Interfaces\Repositories\CurrencyRepositoryInterface;

class CurrencyRepository extends RamRepository implements CurrencyRepositoryInterface
{
    protected $model = \App\Models\Currency::class;
}