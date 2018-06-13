<?php

namespace App\Models;

use MosseboShopCore\Models\Base\BaseModel;
use App\Models\Shop\Currency;

class Language extends BaseModel
{
    protected $tableIdentif = 'Languages';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function currency()
    {
        return $this->hasOne(Currency::class, 'code', 'currency_code');
    }
}
