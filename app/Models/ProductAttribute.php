<?php

namespace App\Models;

class ProductAttribute extends Base\BaseModel
{
    protected $tableIdentif = 'ProductAttributes';
    protected $primaryKey = null;
    public $incrementing = false;

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