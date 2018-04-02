<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\PositionChangeable;

class Supplier extends Base\BaseModel
{
    use StatusChangeable, PositionChangeable;

    protected $tableIdentif = 'Suppliers';

    protected $fillable = [
        'name', 'description', 'enabled', 'position'
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'supplier_id');
    }

    /**
     * @param array $data
     * @return Supplier
     */
    public function saveFromRequestData(Array $data): self
    {
        if ($this->id) {
            $this->update($this->getFillableData($data));
        }
        else {
            $this->fill($this->getFillableData($data))->save();
        }

        return $this;
    }
}
