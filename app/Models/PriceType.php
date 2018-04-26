<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\Positionable;

class PriceType extends Base\BaseModelI18n
{
    use StatusChangeable, RequestSaver, Positionable;

    protected $fillable = [
      'enabled'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $tableIdentif = 'PriceTypes';

    /**
     * Поле, через которое осуществляется связь с таблицей переводов.
     *
     * @var string
     */
    protected $translateRelationField = 'price_type_id';

    protected $needsToSaveFromRequest = ['i18n'];

    public function prices()
    {
        return $this->morphMany(Price::class, 'price_type_id');
    }
}