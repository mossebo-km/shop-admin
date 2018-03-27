<?php

namespace App\Support\Traits\Controllers;

use Illuminate\Http\Request;

trait Sluggable
{
    /**
     * Проверка существования slug.
     *
     * @param  Request
     * @return Response
     */
    public function slugAvailable(Request $request)
    {
        return response()->json([
            'status' => self::$modelClass::slugAvailableForTable($request->input('slug')) ? 'success' : 'error'
        ]);
    }

    /**
     * Проверка существования slug у конкретной сущности.
     *
     * @param  Request
     * @param  Product
     * @return Response
     */
    public function entitySlugAvailable(Request $request, $id)
    {
        $model = $this->getModel($id);

        return response()->json([
            'status' => $model->slugAvailableForModel($request->input('slug')) ? 'success' : 'error'
        ]);
    }
}