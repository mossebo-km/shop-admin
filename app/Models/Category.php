<?php

namespace App\Models;

class Category extends Base\BaseModelI18
{
    protected $tableIdentif = 'Categories';
    protected $translateRelationField = 'category_id';

    protected $fillable = [
        'parent_id', 'slug', 'enabled', 'position'
    ];

    public function categoryProducts()
    {
        return $this->hasMany(CategoryProducts::class, 'category_id');
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            CategoryProducts::class,
            'product_id',
            'category_id',
            'id',
            'id'
        );
    }

    public function delete()
    {
        \DB::transaction(function() {
            self::where('parent_id', $this->id)->update(['parent_id' => 0]);
            parent::delete();
        });
    }
}