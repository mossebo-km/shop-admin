<?php

namespace App\Contracts\Repositories;

interface CategoryRepository extends RamRepository
{
    public function getTree($modificators);
}