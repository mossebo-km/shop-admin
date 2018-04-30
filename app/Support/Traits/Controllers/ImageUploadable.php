<?php

namespace App\Support\Traits\Controllers;

use App\Http\Resources\MediaResource;
use App\Http\Requests\ImageUploadRequest;

trait ImageUploadable {
    /**
    * Загрузка изображений для конкретного товара.
    *
    * @param ImageUploadRequest $request
    * @param Integer $product
    * @return \Illuminate\Http\JsonResponse
    */
    public function imageUpload(ImageUploadRequest $request, int $id)
    {
        $model = self::$modelClass::where('id', $id)->firstOrFail();

        $image = $model->addImageFromFile($request->file('file'));

        return response()->json([
            'status' => 'success',
            'image' => new MediaResource($image),
        ]);
    }
}