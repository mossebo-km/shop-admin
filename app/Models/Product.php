<?php

namespace App\Models;

use App\MediaLibrary\ImageEditor;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media as BaseMedia;
use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\Sluggable;
use App\Support\Traits\Models\RequestSaver;
use Spatie\Image\Manipulations;

class Product extends Base\BaseModelI18 implements HasMedia
{
    use HasMediaTrait, StatusChangeable, Sluggable, RequestSaver;

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
        'supplier_id', 'quantity', 'showed', 'bought', 'is_new', 'is_popular', 'enabled', 'is_payable',
        'width', 'height', 'length', 'weight'
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
     * Адрес товара на сайте.
     *
     * @return string
     */
    public function url()
    {
        return "/products/{$this->code}";
    }

    /**
     * Задает преобразователи изображений.
     *
     * @param BaseMedia|null $media
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(BaseMedia $media = null)
    {
        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_MAX, 1920, 1920)
            ->background('fff')
            ->performOnCollections('images');

        $this->addMediaConversion('medium')
            ->fit(Manipulations::FIT_MAX, 800, 800)
//            ->background('fff')

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
            $categoryProducts = $this->categoryProducts();
            $categoryProducts->delete();

            foreach ($categoryIds as $categoryId) {
                $categoryProducts->save(new CategoryProducts(['category_id' => $categoryId]));
            }
        }

        /**
         * Сохранение изображений товара.
         *
         * @param array $imagesIds
         */
        protected function _saveImages(Array $images = [])
        {
            $existingImages = $this->media()->get();
            $ids = array_column($images, 'id');

            foreach ($existingImages as $image) {
                $index = array_search($image->id, $ids);

                if ($index === false) {
                    $image->delete();

                } else {
                    $modifications = isset($images[$index]['modifications']) ? $images[$index]['modifications'] : [];
                    $this->_saveImage($image, $index, $modifications);
                }
            }
        }

        protected function _saveImage($image, $order = 0, $modifications = [])
        {
            if ($image->collection_name === 'temp') {
                $image = $image->move($this, 'images');
            }

            if (empty($modifications)) {
                $image->order_column = $order;
                $image->save();
            }
            else {
                // todo: Может быть выброшена ошибка - надо ее каким-то образом обработать.

                try {
                    (new ImageEditor($image))
                        ->decode($modifications)
                        ->save();
                }
                catch(\Exception $e) {
                    throw new \App\Exceptions\AdminException('Ошибка обработки изображения. Обратитесь к разработчикам.', 0, $e, [
                        'images' => [$image->id]
                    ]);
                }

                $image = $image->move($this, 'images');

                $image->order_column = $order;
                $image->save();
            }
        }

//        collection_name

        /**
         * Сохранение цен.
         *
         * @param array $prices
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
     * @param $id
     * @param string $needsToConnect
     * @return array
     */
    public static function getData($id, $needsToConnect = 'all'): array
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

        return $query->first()->toArray();
    }


    /**
     * Добавляет изображение в список неподтвержденных.
     *
     * @param $file
     * @return BaseMedia
     * @throws \Spatie\MediaLibrary\Exceptions\FileCannotBeAdded
     */
    public function addImageFromFile($file): BaseMedia
    {
        return $this
            ->addMediaFromUrl($file->path())
            ->usingFileName($this->generateUniqueFilename('jpg'))
            ->toMediaCollection('temp');
    }

    /**
     * Генерация уникального имени файла.
     *
     * Todo: вынести эту хрень куда-нибудь.
     *
     * @param string $extension
     * @return string
     */
    protected function generateUniqueFilename($extension)
    {
        return str_replace('.', '', uniqid('', true)) . ".{$extension}";
    }
}


