<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Api\ApiController;

use Categories;

use App\Models\Shop\Category\Category;

use App\Http\Resources\Shop\Category\CategoryEditResource;
use App\Http\Resources\Shop\Category\CategoryTableResource;

use App\Support\Traits\Controllers\Creatable;
use App\Support\Traits\Controllers\Updatable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Support\Traits\Controllers\Sluggable;
use App\Support\Traits\Controllers\ImageUploadable;


class CategoryController extends ApiController
{
    use Creatable, Updatable, Deleteable, StatusChangeable, Sluggable, PositionChangeable, ImageUploadable;

    protected static $modelClass = Category::class;
    protected static $entityName = 'category';
    protected static $editResource = CategoryEditResource::class;
    protected static $tableResource = CategoryTableResource::class;

    public function index()
    {
        return [
            'categories' => static::toResource(Categories::getTree([
                'i18n',
                'productCount',
                'image'
            ])),
        ];
    }
}