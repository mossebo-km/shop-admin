<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProductI18 extends Base\BaseModel
{
    use SoftDeletes;

    protected $tableIdentif = 'ProductsI18';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'product_id', 'language_code', 'title', 'description', 'meta_title', 'meta_description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at'
    ];

    protected $dates = [
        'deleted_at'
    ];
}