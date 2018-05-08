<?php

namespace App\Http\Controllers\Api;

use Categories;

use App\Models\Category;

use App\Http\Resources\CategoryEditResource;
use App\Http\Resources\CategoryTableResource;

use App\Support\Traits\Controllers\Creatable;
use App\Support\Traits\Controllers\Updatable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Support\Traits\Controllers\Sluggable;


class CategoryController extends ApiController
{
    use Creatable, Updatable, Deleteable, StatusChangeable, Sluggable, PositionChangeable;

    protected static $modelClass = Category::class;
    protected static $entityName = 'category';
    protected static $editResource = CategoryEditResource::class;
    protected static $tableResource = CategoryTableResource::class;

    /**
     * Список категорий.
     *
     * @return array
     */
    public function index()
    {
        return [
            'categories' => static::toResource(Categories::getTree(['i18n', 'productCount'])),
        ];
    }
}