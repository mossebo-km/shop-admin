<?php

namespace App\Interfaces\Repositories;

interface CategoryRepositoryInterface extends RamRepositoryInterface
{
    public function getTree($parentId, $withDisabled);
}