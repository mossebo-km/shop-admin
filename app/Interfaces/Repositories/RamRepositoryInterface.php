<?php

namespace App\Interfaces\Repositories;

interface RamRepositoryInterface
{
    public function getCollection();
    public function getCachceMinutes();
    public function clearCache();
}
