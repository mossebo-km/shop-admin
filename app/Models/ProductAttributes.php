<?php

namespace App\Models;

class ProductAttributes extends Base\BaseModel
{
    protected $tableIdentif = 'ProductAttributes';

    protected $fillable = [
        'product_id', 'attribute_id'
    ];

    public $timestamps = false;

    public function attributes()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}