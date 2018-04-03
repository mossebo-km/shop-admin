<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media as BaseMedia;
use App\MediaLibrary\Models\Media;
use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\Sluggable;
use App\Support\Traits\Models\RequestSaver;

class Product extends Base\BaseModelI18 implements HasMedia
{
    use SoftDeletes, HasMediaTrait, StatusChangeable, Sluggable, RequestSaver;

    /**
     * Идентификатор таблицы.
     *
     * @var string
     */
    protected $tableIdentif = 'Products';

    /**
     * Поле, через которое осуществляется связь с таблицей переводов.
     *
     * @var string
     */
    protected $translateRelationField = 'product_id';

    /**
     * Поля пригодные для заполнения.
     *
     * @var array
     */
    protected $fillable = [
        'supplier_id', 'quiantity', 'showed', 'bought', 'is_new', 'is_popular', 'enabled', 'is_payable'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at'
    ];

    /**
     * Атрибуты, которые должны быть преобразованы в даты.
     *
     * @var array
     */

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Какие пункты надо сохранить их полученного запроса.
     *
     * @var array
     */
    protected $needsToSaveFromRequest = ['i18', 'categories', 'images', 'prices'];

    public function prices()
    {
        return $this->morphMany(Price::class, 'item');
    }

    public function categoryProducts()
    {
        return $this->hasMany(CategoryProducts::class, 'product_id');
    }

    public function categories()
    {
        return $this->hasManyThrough(
            Category::class, CategoryProducts::class,
            'product_id', 'id'
        );
    }

    public function productAttributes()
    {
        return $this->hasMany(ProductAttributes::class, 'product_id');
    }

    public function attributes()
    {
        return $this->hasManyThrough(
            Attribute::class, ProductAttributes::class,
            'product_id', 'id'
        );
    }

    public function productAttributeOptions()
    {
        return $this->hasMany(ProductAttributeOptions::class, 'product_id');
    }

    public function attributeOptions()
    {
        return $this->hasManyThrough(
            AttributeOption::class, ProductAttributeOptions::class,
            'product_id', 'id'
        );
    }

    public function supplier()
    {
        return $this->hasOne(Supplier::class, 'supplier_id');
    }

    /**
     * Удаление товара.
     *
     * @return [type] ???
     */
    public function delete()
    {
        return \DB::transaction(function () {
            $this->prices()->delete();

            return parent::delete();
        });
    }

    /**
     * @return Адрес товара на сайте.
     */
    public function url()
    {
        return "/products/{$this->code}";
    }

    /**
     * Задает преобразователи изображений.
     *
     * @param  Media|null
     * @return void
     */
    public function registerMediaConversions(BaseMedia $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(160)
            ->height(120)
            ->withResponsiveImages()
            ->performOnCollections('images');

        $this->addMediaConversion('small')
            ->width(280)
            ->height(210)
            ->withResponsiveImages()
            ->performOnCollections('images');

        $this->addMediaConversion('medium')
            ->width(400)
            ->height(300)
            ->withResponsiveImages()
            ->performOnCollections('images');

        $this->addMediaConversion('large')
            ->width(640)
            ->height(480)
            ->withResponsiveImages()
            ->performOnCollections('images');
    }



        /**
         * Сохранение категорий товара.
         *
         * @param  Array|array
         * @return void
         */
        protected function _saveCategories(Array $categoryIds = [])
        {
            $categoryProducts = $this->categoryProducts();
            $categoryProducts->delete();

            foreach ($categoryIds as $categoryId) {
                $categoryProducts->save(new CategoryProducts(['category_id' => $categoryId]));
            }
        }

        /**
         * Сохранение изображений товара.
         *
         * @param  Array|array
         * @return void
         */
        protected function _saveImages(Array $imagesIds = [])
        {
            $existingImages = $this->getMedia('images');

            foreach ($existingImages as $image) {
                $index = array_search($image['id'], $imagesIds);

                if ($index === false) {
                    $image->delete();
                }
                else {
                    unset($imagesIds[$index]);
                }
            }

            $tempImages = $this->getMedia('temp');

            foreach ($tempImages as $image) {
                $index = array_search($image['id'], $imagesIds);

                if ($index === false) {
                    $image->delete();
                }
                else {
                    $image = $image->move($this, 'images', 'media');
                }
            }
        }

        /**
         * Сохранение цен.
         *
         * @param  Array|array
         * @return void
         */
        protected function _savePrices(Array $prices = [])
        {
            $productPrices = $this->prices();
            $productPrices->delete();
            $pricesToSave = [];

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

    /**
     * Получение данных для отправки по api.
     *
     * @param  mixed (string || array)
     * @return Array
     */
    public static function getData($id, $needsToConnect = 'all'): Array
    {
        if ($needsToConnect === 'all') {
            $needsToConnect = ['i18', 'prices', 'images', 'categories'];
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

        return $query->first();
    }

    /**
     * Добавляет изображение в список неподтвержденных.
     *
     * @param string
     * @param string
     * @return Media obj
     */
    public function addImageToTemp($path, $filename): Media
    {
        return $this
            ->addMediaFromUrl($path)
            ->usingFileName($filename)
            ->toMediaCollection('temp', 'media');
    }
}