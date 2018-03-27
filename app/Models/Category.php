<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\PositionChangeable;
use App\Support\Traits\Models\Sluggable;

class Category extends Base\BaseModelI18
{
    use StatusChangeable, PositionChangeable, Sluggable;

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