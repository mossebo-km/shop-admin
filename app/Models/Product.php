<?php

namespace App\Models;

class Product extends Base\BaseModelI18
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

    public function url()
    {
        return "/products/{$this->code}";
    }

    public function categoryProducts()
    {
        return $this->hasMany(CategoryProducts::class, 'product_id');
    }


    public function categories()
    {
        return $this->hasManyThrough(
            CategoryProducts::class,
            Category::class,
            'category_id',
            'product_id',
            'id',
            'id'
        );
    }
}