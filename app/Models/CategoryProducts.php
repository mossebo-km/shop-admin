<?php

namespace App\Models;

class categoryProducts extends Base\BaseModel
{
    protected $tableIdentif = 'CategoryProducts';

    protected $fillable = [
        'category_id', 'product_id'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
