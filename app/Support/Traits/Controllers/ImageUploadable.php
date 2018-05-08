<?php

namespace App\Support\Traits\Controllers;

use App\Http\Resources\MediaResource;
use App\Http\Requests\ImageUploadRequest;

trait ImageUploadable {
    /**
    * Загрузка изображений для конкретного товара.
    *
    * @param ImageUploadRequest $request
    * @param Integer $entityId
    * @return \Illuminate\Http\JsonResponse
    */
    public function imageUpload(ImageUploadRequest $request, $entityId)
    {
        $image = static::getModel($entityId)->addImageFromFile($request->file('file'));

        return response()->json([
            'status' => 'success',
            'image' => new MediaResource($image),
        ]);
    }
}