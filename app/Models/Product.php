<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends ModelI18
{
    protected $tableIdentif = 'Products';
    protected $translateRelationField = 'product_id';
    protected $fillable = [
        'code', 'sku', 'quiantity', 'showed', 'bought', 'is_new', 'is_popular'
    ];

    public function prices()
    {
        return $this->morphMany(Price::class, 'item');
    }

    public function delete()
    {
        return \DB::transaction(function () {
            $this->prices()->delete();

            return parent::delete();
        });
    }
}