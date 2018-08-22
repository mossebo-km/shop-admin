<?php

namespace App\Models\Shop;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;
use App\Support\Traits\Models\HasMediaTrait;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\Sluggable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\I18nTrait;

use MosseboShopCore\Models\Shop\Product as BaseProduct;

class Product extends BaseProduct implements HasMedia
{
    use HasMediaTrait, StatusChangeable, Sluggable, RequestSaver, I18nTrait;

    protected $fillable = [
        'supplier_id',
        'quantity',
        'showed',
        'bought',
        'is_new',
        'is_popular',
        'enabled',
        'is_payable',
        'width',
        'height',
        'length',
        'weight'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $needsToSaveFromRequest = [
        'i18n',
        'categories',
        'rooms',
        'styles',
        'images',
        'prices',
        'attributes',
        'related'
    ];

    protected $mapping = [
        'properties' => [
            'index' => [
                'type' => 'text',
            ],
        ]
    ];

    public function toSearchableArray()
    {
        $index = [
            $this->id
        ];

        foreach ($this->attributeOptions as $option) {
            foreach ($option->i18n as $translate) {
                $index[] = $translate->value;
            }
        }

        foreach ($this->categories as $category) {
            foreach ($category->i18n as $translate) {
                $index[] = $translate->title;
            }
        }

        foreach ($this->styles as $style) {
            foreach ($style->i18n as $translate) {
                $index[] = $translate->title;
            }
        }

        foreach ($this->rooms as $room) {
            foreach ($room->i18n as $translate) {
                $index[] = $translate->title;
            }
        }

        foreach ($this->i18n as $translate) {
            $index[] = $translate->title;
            $index[] = $translate->description;
        }

        $index = array_unique($index);

        return [
            'index' => join(' ', preg_replace('/\s\s+/', ' ', $index)),
        ];
    }

    public function prices()
    {
        return $this->morphMany(Price::class, 'item');
    }

    public function categoryRelations()
    {
        return $this->hasMany(CategoryProduct::class, $this->relationFieldName);
    }

    public function categories()
    {
        return $this->hasManyThrough(
            Category::class, CategoryProduct::class,
            $this->relationFieldName, 'id', 'id', 'category_id'
        );
    }

    public function roomRelations()
    {
        return $this->hasMany(RoomProduct::class, $this->relationFieldName);
    }

    public function rooms()
    {
        return $this->hasManyThrough(
            Room::class, RoomProduct::class,
            $this->relationFieldName, 'id', 'id', 'room_id'
        );
    }

    public function styleRelations()
    {
        return $this->hasMany(StyleProduct::class, $this->relationFieldName);
    }

    public function styles()
    {
        return $this->hasManyThrough(
            Style::class, StyleProduct::class,
            $this->relationFieldName, 'id', 'id', 'style_id'
        );
    }

    public function attributes()
    {
        return $this->hasManyThrough(
            Attribute::class, ProductAttribute::class,
            $this->relationFieldName, 'id', 'id', 'attribute_id'
        );
    }

    public function attributeRelations()
    {
        return $this->hasMany(ProductAttribute::class, $this->relationFieldName);
    }

    public function attributeOptions()
    {
        return $this->hasManyThrough(
            AttributeOption::class, ProductAttributeOption::class,
            $this->relationFieldName, 'id', 'id', 'option_id'
        );
    }

    public function attributeOptionRelations()
    {
        return $this->hasMany(ProductAttributeOption::class, $this->relationFieldName);
    }

    public function supplier()
    {
        return $this->hasOne(Supplier::class, 'id', 'supplier_id');
    }

    public function relatedRelations()
    {
        return $this->hasMany(RelatedProduct::class, $this->relationFieldName);
    }

    public function related()
    {
        return $this->hasManyThrough(
            Product::class, RelatedProduct::class,
            $this->relationFieldName, 'id', 'id', 'related_id'
        );
    }

    /**
     * Удаление товара.
     *
     * @return bool|null
     */
    public function delete()
    {
        return \DB::transaction(function () {
            $this->prices()->delete();

            return parent::delete();
        });
    }

    /**
     * Задает преобразователи изображений.
     *
     * @param Media|null $media
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_MAX, 1920, 1920)
            ->background('fff')
            ->performOnCollections('images');

        $this->addMediaConversion('medium')
            ->fit(Manipulations::FIT_MAX, 800, 800)
            ->background('fff')
            ->withResponsiveImages()
            ->performOnCollections('images');

        $this->addMediaConversion('small')
            ->fit(Manipulations::FIT_MAX, 400, 400)
            ->background('fff')
            ->withResponsiveImages()
            ->performOnCollections('images');

        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_MAX, 160, 160)
            ->background('fff')
            ->withResponsiveImages()
            ->nonQueued()
            ->performOnCollections('images');

        $this->addMediaConversion('small')
            ->fit(Manipulations::FIT_MAX, 400, 400)
            ->background('fff')
            ->withResponsiveImages()
            ->nonQueued()
            ->performOnCollections('temp');
    }


        /**
         * Сохранение категорий товара.
         *
         * @param array $categoryIds
         */
        protected function _saveCategories(Array $categoryIds = [])
        {
            $categoryRelations = $this->categoryRelations();
            $categoryRelations->delete();

            foreach ($categoryIds as $categoryId) {
                $categoryRelations->save(new CategoryProduct(['category_id' => $categoryId]));
            }
        }

        /**
         * Сохранение комнат товара.
         *
         * @param array $roomsIds
         */
        protected function _saveRooms(Array $roomsIds = [])
        {
            $roomRelations = $this->roomRelations();
            $roomRelations->delete();

            foreach ($roomsIds as $roomId) {
                $roomRelations->save(new RoomProduct(['room_id' => $roomId]));
            }
        }

        /**
         * Сохранение категорий товара.
         *
         * @param array $categoryIds
         */
        protected function _saveStyles(Array $stylesIds = [])
        {
            $styleRelations = $this->styleRelations();
            $styleRelations->delete();

            foreach ($stylesIds as $styleId) {
                $styleRelations->save(new StyleProduct(['style_id' => $styleId]));
            }
        }

        /**
         * Сохранение цен.
         *
         * @param array $prices
         */
        protected function _savePrices(Array $pricesData = [])
        {
            $productPrices = $this->prices();
            $productPrices->delete();
            $pricesToSave = [];

            foreach ($pricesData as $priceTypeId => $pricesByCurrencies) {
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

        protected function _saveAttributes(Array $attributesData) {
            $this->attributeRelations()->delete();
            $this->attributeOptionRelations()->delete();
            $lastOptionPosition = AttributeOption::getLastPosition();

            $attributes = Attribute::whereIn('id', array_keys($attributesData))->get();

            foreach ($attributesData as $attributeId => $options) {
                $attribute = $attributes->where('id', $attributeId)->first();

                if (! $attribute) continue;

                $this->attributeRelations()->save(new ProductAttribute([
                    'attribute_id' => $attribute->id
                ]));

                foreach ($options as $optionId => $optionValue) {
                    if (is_array($optionValue)) {
                        $option = (new AttributeOption)->saveFromRequestData([
                            'attribute_id' => $attribute->id,
                            'enabled' => true,
                            'position' => ++$lastOptionPosition,
                            'i18n' => $optionValue,
                        ]);

                        $attribute->options()->save($option);

                        $this->attributeOptionRelations()->save(new ProductAttributeOption([
                            'attribute_id' => $attribute->id,
                            'option_id' => $option->id,
                        ]));
                    }
                    else {
                        $this->attributeOptionRelations()->save(new ProductAttributeOption([
                            'attribute_id' => $attribute->id,
                            'option_id' => $optionId
                        ]));
                    }
                }
            }
        }

        protected function _saveRelated(Array $relatedIds)
        {
            $relatedRelations = $this->relatedRelations();
            $relatedRelations->delete();

            foreach ($relatedIds as $relatedId) {
                $relatedRelations->save(new RelatedProduct(['related_id' => $relatedId]));
            }
        }

    /**
     * Получение данных для отправки по api.
     *
     * @param $id
     * @param string $needsToConnect
     * @return array
     */
    public static function getData($id, $needsToConnect = 'all'): array
    {
        if ($needsToConnect === 'all') {
            $needsToConnect = ['i18n', 'prices', 'images', 'categories'];
        }

        if ($needsToConnect === 'nothig') {
            $needsToConnect = [];
        }

        if (! is_array($needsToConnect)) {
            $needsToConnect = [$needsToConnect];
        }

        $query = self::where('id', $id);

        foreach ($needsToConnect as $connect) {
            if (method_exists($query, $connect)) {
                $query = $query->with($connect);
            }
        }

        return $query->first()->toArray();
    }

    public static function enabled()
    {
        $supplierTableName = config('tables.Suppliers');
        $productTableName = config('tables.Products');

        return self::select(\DB::raw("{$productTableName}.*"))
            ->where("{$productTableName}.enabled", 1)
            ->leftJoin("{$supplierTableName}", function($join) use($supplierTableName, $productTableName) {
                $join->on("{$supplierTableName}.id", '=', "{$productTableName}.supplier_id")
                    ->where("{$supplierTableName}.enabled", true);
            });
    }
}


