<?php

namespace App\Repositories;

use App\Contracts\Repositories\AdminRoleRepository as AdminRoleRepositoryContract;

class AdminRoleRepository extends RamRepository implements AdminRoleRepositoryContract
{
    protected $model = \App\Models\AdminRole::class;

    protected function _getCollection() {
        return $this->model::orderBy('position', 'asc')->get();
    }
}