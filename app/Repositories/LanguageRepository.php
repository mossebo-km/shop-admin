<?php

namespace App\Repositories;

use App\Interfaces\Repositories\LanguageRepositoryInterface;

class LanguageRepository extends RamRepository implements LanguageRepositoryInterface
{
    protected $model = \App\Models\Language::class;
}