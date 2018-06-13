<?php

namespace App\Repositories;

use MosseboShopCore\Repositories\RamRepository;
use App\Contracts\Repositories\AdminRoleRepository as AdminRoleRepositoryContract;

class AdminRoleRepository extends RamRepository implements AdminRoleRepositoryContract
{
    protected $model = \App\Models\AdminRole::class;

    protected function _getBaseQuery() {
        return $this->model::orderBy('position', 'asc');
    }
}