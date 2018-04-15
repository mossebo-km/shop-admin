<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\PositionChangeable;
//use App\Exceptions\AdminException;

class Attribute extends Base\BaseModelI18
{
    use PositionChangeable, StatusChangeable, RequestSaver;

    /**
     * Идентификатор таблицы.
     *
     * @var string
     */
    protected $tableIdentif = 'Attributes';

    /**
     * Поле, через которое осуществляется связь с таблицей переводов.
     *
     * @var string
     */
    protected $translateRelationField = 'attribute_id';

    /**
     * Поля пригодные для заполнения.
     *
     * @var array
     */
    protected $fillable = [
        'layout_class', 'selectable', 'enabled'
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
    protected $needsToSaveFromRequest = ['i18', 'options'];

    public function productAttributes()
    {
        return $this->hasMany(ProductAttributes::class, 'attribute_id');
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            ProductAttributes::class,
            'product_id',
            'attribute_id',
            'id',
            'id'
        );
    }

    public function options()
    {
        return $this->hasMany(AttributeOption::class, 'attribute_id');
    }

    protected function _saveOptions(Array $optionsData = [])
    {
        $optionsToUpdate = [];
        $optionsToCreate = [];

        foreach ($optionsData as $optionData) {
            if (isset($optionData['id'])) {
                $optionsToUpdate[$optionData['id']] = $optionData;
            }
            else {
                $optionsToCreate[] = $optionData;
            }
        }

        $currentOptions = $this->options()->get();

        foreach ($currentOptions as $option) {
            if (isset($optionsToUpdate[$option->id])) {
                $option->saveFromRequestData($optionsToUpdate[$option->id]);
            }
            else {
                $option->delete();
            }
        }

        foreach ($optionsToCreate as $optionData) {
            $optionData['attribute_id'] = $this->id;

            (new AttributeOption)->saveFromRequestData($optionData);
        }
    }
}
