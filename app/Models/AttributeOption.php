<?php

namespace App\Models;

class AttributeOption extends Base\BaseModel
{
    protected $tableIdentif = 'AttributeOptions';

    protected $fillable = [
        'attribute_id', 'language_code', 'value', 'position'
    ];

    public function attribute()
    {
        return $this->hasOne(Attribute::class, 'attribute_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}