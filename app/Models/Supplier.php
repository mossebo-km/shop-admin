<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\PositionChangeable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Base\BaseModel
{
    use SoftDeletes, StatusChangeable, PositionChangeable;

    protected $tableIdentif = 'Suppliers';

    protected $fillable = [
        'name', 'description', 'enabled', 'position'
    ];

    protected $hidden = [
        'deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
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
