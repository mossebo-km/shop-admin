<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\Sluggable;
use App\Support\Traits\Models\RequestSaver;

class Category extends Base\BaseModelI18
{
    use StatusChangeable, Positionable, Sluggable, RequestSaver;

    protected $tableIdentif = 'Categories';
    protected $translateRelationField = 'category_id';

    protected $fillable = [
        'parent_id', 'slug', 'enabled', 'position'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $needsToSaveFromRequest = ['i18'];

    public function categoryProducts()
    {
        return $this->hasMany(CategoryProduct::class, 'category_id');
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            CategoryProduct::class,
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