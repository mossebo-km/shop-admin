<?php

namespace App\Models;

class ProductAttributeOptions extends Base\BaseModel
{
    protected $tableIdentif = 'ProductAttributeOptions';

    protected $fillable = [
        'attribute_id', 'product_id', 'option_id'
    ];

    public $timestamps = false;

    public function attributes()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function options()
    {
        return $this->belongsTo(AttributeOption::class, 'option_id');
    }
}
