<?php

namespace App\Models;

class CategoryProduct extends Base\BaseModel
{
    protected $tableIdentif = 'CategoryProducts';
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'category_id', 'product_id'
    ];

    public $timestamps = false;

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
