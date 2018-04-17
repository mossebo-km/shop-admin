<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\Positionable;

class AttributeOption extends Base\BaseModelI18
{
    use StatusChangeable, RequestSaver, Positionable;

    /**
     * Идентификатор таблицы.
     *
     * @var string
     */
    protected $tableIdentif = 'AttributeOptions';

    /**
     * Поле, через которое осуществляется связь с таблицей переводов.
     *
     * @var string
     */
    protected $translateRelationField = 'option_id';

    /**
     * Поля пригодные для заполнения.
     *
     * @var array
     */
    protected $fillable = [
        'attribute_id', 'position', 'enabled'
    ];

    /**
     * Атрибуты, которые должны быть преобразованы в даты.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Данные, которые необходимо созранить из запроса.
     *
     * @var array
     */
    protected $needsToSaveFromRequest = ['i18'];

    public function attribute()
    {
        return $this->hasOne(Attribute::class, 'attribute_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}