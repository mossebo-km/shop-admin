<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\Sluggable;
use App\Support\Traits\Models\RequestSaver;
use Kalnoy\Nestedset\NodeTrait;


class Category extends Base\BaseModelI18n
{
    use StatusChangeable, Positionable, Sluggable, RequestSaver, NodeTrait;

    protected $tableIdentif = 'Categories';
    protected $translateRelationField = 'category_id';

    protected $fillable = [
        'parent_id', 'slug', 'enabled', 'position'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $needsToSaveFromRequest = ['i18n'];

    public function categoryProducts()
    {
        return $this->hasMany(CategoryProduct::class, 'category_id');
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class, CategoryProduct::class,
            'category_id', 'id', 'id', 'product_id'
        );
    }

    public function delete()
    {
        \DB::transaction(function() {
            self::where('parent_id', $this->id)->update(['parent_id' => 0]);
            parent::delete();
        });
    }

    /**
     * Получение id-шников всех потомков.
     *
     * @param int $parentId
     * @param array $acc
     * @return array
     */
    public static function getDescendantIds($parentId = 0)
    {
        return array_column(self::descendantsOf($parentId)->toArray(), 'id');
    }
}