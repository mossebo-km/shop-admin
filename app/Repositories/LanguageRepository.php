<?php

namespace App\Repositories;

use App\Contracts\Repositories\LanguageRepository as LanguageRepositoryContract;

class LanguageRepository extends RamRepository implements LanguageRepositoryContract
{
    protected $model = \App\Models\Language::class;
}