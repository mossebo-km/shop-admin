<?php

namespace App\Support\Traits\Models;

use App\MediaLibrary\ImageEditor;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait as BaseHasMediaTrait;

use App\Exceptions\AdminException;

trait HasMediaTrait {
    use BaseHasMediaTrait {
        BaseHasMediaTrait::getMedia as baseGetMedia;
    }

    public function getMedia(string $collectionName = null, $filters = [])
    {
        if (is_null($collectionName)) {
            $collectionName = $this->mediaCollectionName ?: '';
        }

        return $this->baseGetMedia($collectionName, $filters);
    }

    public function image()
    {
        return $this->morphOne(config('medialibrary.media_model'), 'model')
            ->where('collection_name', $this->mediaCollectionName)
            ->orderBy('order_column', 'asc');
    }

    public function images()
    {
        return $this->morphMany(config('medialibrary.media_model'), 'model')
            ->where('collection_name', $this->mediaCollectionName)
            ->orderBy('order_column', 'asc');
    }

    /**
     * Сохранение изображений товара.
     *
     * @param array $imagesIds
     */
    protected function _saveImages(Array $imagesData = [])
    {
        $existingImages = $this->media()->get();

        if (is_null($imagesData)) {
            $ids = [];
        }
        else {
            $ids = array_column($imagesData, 'id');
        }


        foreach ($existingImages as $image) {
            $index = array_search($image->id, $ids);

            if ($index === false) {
                $image->delete();

            } else {
                $modifications = isset($imagesData[$index]['modifications']) ? $imagesData[$index]['modifications'] : [];
                $this->_saveImage($image, $index, $modifications);
            }
        }
    }

    protected function _saveImage($image, $order = 0, $modifications = [])
    {
        if ($image->collection_name === 'temp') {
            $image = $image->move($this, $this->mediaCollectionName);
        }

        if (empty($modifications)) {
            $image->order_column = $order;
            $image->save();
        }
        else {
            try {
                (new ImageEditor($image))
                    ->decode($modifications)
                    ->save();
            }
            catch(\Exception $e) {
                throw new AdminException('Ошибка обработки изображения. Обратитесь к разработчикам.', 0, $e, [
                    'images' => [$image->id]
                ]);
            }

            $image = $image->move($this, $this->mediaCollectionName);

            $image->order_column = $order;
            $image->save();
        }
    }


    /**
     * Добавляет изображение в список неподтвержденных.
     *
     * @param $file
     * @return Media
     * @throws \Spatie\MediaLibrary\Exceptions\FileCannotBeAdded
     */
    public function addImageFromFile($file): Media
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