<?php

namespace App\Models;

class PriceTypeI18n extends Base\BaseModel
{
    protected $tableIdentif = 'PriceTypesI18n';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'price_type_id', 'language_code', 'title', 'description'
    ];
}
