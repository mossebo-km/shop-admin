<?php

namespace App\Contracts\Repositories;

interface RamRepository
{
    public function getCollection();
    public function clearCache();
}
