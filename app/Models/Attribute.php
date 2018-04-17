<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\Positionable;
//use App\Exceptions\AdminException;

class Attribute extends Base\BaseModelI18
{
    use Positionable, StatusChangeable, RequestSaver;

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
        return $this->hasMany(ProductAttribute::class, 'attribute_id');
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            ProductAttribute::class,
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
        $currentOptions = $this->options()->get();

        foreach ($currentOptions as $currentOption) {
            if (isset($optionsData[$currentOption->id])) {
                $currentOption->saveFromRequestData($optionsData[$currentOption->id]);
                unset($optionsData[$currentOption->id]);
            }
            else {
                $currentOption->delete();
            }
        }

        foreach ($optionsData as $optionId => $optionData) {
            if (isset($optionData['isNew']) && $optionData['isNew']) {
                $optionData['attribute_id'] = $this->id;

                (new AttributeOption)->saveFromRequestData($optionData);
            }
        }
    }
}
