<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRoleRelation extends Model
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
