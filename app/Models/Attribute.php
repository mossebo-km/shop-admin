<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\Sluggable;
use App\Support\Traits\Models\RequestSaver;

class Attribute extends Base\BaseModelI18
{
    use HasMediaTrait, StatusChangeable, Sluggable, RequestSaver;

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

    protected function _saveOptions(Array $options = [])
    {
        $productPrices = $this->prices();
        $productPrices->delete();
        $pricesToSave = [];

        $options = '';

        foreach ($prices as $priceTypeId => $pricesByCurrencies) {
            foreach ($pricesByCurrencies as $currencyCode => $priceValue) {
                if (empty($priceValue)) continue;

                $productPrices->save(new Price($pricesToSave[] = [
                    'price_type_id' => $priceTypeId,
                    'currency_code' => $currencyCode,
                    'value'         => $priceValue
                ]));
            }
        }
    }
}
