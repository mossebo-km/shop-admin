<?php

namespace App\Models\Shop\Product;

use MosseboShopCore\Models\Shop\Product\Product as BaseProduct;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;
use App\Support\Traits\Models\HasMediaTrait;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\Sluggable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\I18nTrait;
use App\Support\Traits\Models\HasRooms;
use App\Support\Traits\Models\HasStyles;

use App\Models\Shop\Badge\Badge;

use App\Models\Shop\Price\Price;

use App\Models\Shop\Category\Category;
use App\Models\Shop\Category\CategoryProduct;

use App\Models\Shop\Room\RoomProduct;
use App\Models\Shop\Style\StyleProduct;

use App\Models\Shop\Attribute\Attribute;
use App\Models\Shop\Attribute\AttributeOption;

use App\Models\Shop\Supplier\Supplier;

class Product extends BaseProduct implements HasMedia
{
    use HasMediaTrait, StatusChangeable, Sluggable, RequestSaver, I18nTrait, HasRooms, HasStyles;

    protected $needsToSaveFromRequest = [
        'i18n',
        'categories',
        'rooms',
        'styles',
        'images',
        'prices',
        'attributes',
        'related',
        'badges'
    ];

    protected $roomRelationModel = RoomProduct::class;
    protected $styleRelationModel = StyleProduct::class;

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

    public function badges()
    {
        return $this->morphMany(Badge::class, 'item');
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
            $this->badges()->delete();

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
        protected function _saveCategories(array $categoryIds = [])
        {
            $categoryRelations = $this->categoryRelations();
            $categoryRelations->delete();

            foreach ($categoryIds as $categoryId) {
                $categoryRelations->save(new CategoryProduct(['category_id' => $categoryId]));
            }
        }

        /**
         * Сохранение цен.
         *
         * @param array $prices
         */
        protected function _savePrices(array $pricesData = [])
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

        protected function _saveAttributes(array $attributesData) {
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

        protected function _saveRelated(array $relatedIds)
        {
            $relatedRelations = $this->relatedRelations();
            $relatedRelations->delete();

            foreach ($relatedIds as $relatedId) {
                $relatedRelations->save(new RelatedProduct([
                    'related_id' => $relatedId
                ]));
            }
        }

        protected function _saveBadges(array $badgeTypeIds)
        {
            $badges = $this->badges();
            $badges->delete();

            foreach ($badgeTypeIds as $badgeTypeId) {
                $badges->save(new Badge([
                    'badge_type_id' => $badgeTypeId
                ]));
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
}

