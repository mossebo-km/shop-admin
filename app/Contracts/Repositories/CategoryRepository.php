<?php

namespace App\Contracts\Repositories;

interface CategoryRepository extends RamRepository
{
    public function getTree($parentId, $withDisabled);
    public function getAllChildsIds($parentId, &$acc = []);
}