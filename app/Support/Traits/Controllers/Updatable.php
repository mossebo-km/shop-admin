<?php

namespace App\Support\Traits\Controllers;

use App\Events\Entity\EntityUpdated;
use App\Exceptions\AdminException;
use App\Http\Requests\ApiRequest;

trait Updatable
{
    /**
     * Изменение сущности.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ApiRequest $request, $entityId)
    {
        $entity = $this->getModel($entityId);

        try {
            $entity = $entity->saveFromRequestData($this->request->all());
        }
        catch (AdminException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'errors' => $e->getParams(),
            ], 422);
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (2001). Обратитесь к разработчикам.'
            ], 500);
        }

        $entity = $entity->fresh();

        \Event::fire(new EntityUpdated($entity));
        $entityName = static::$entityName;

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $entity->id]),
            "{$entityName}" => static::toResource($entity)
        ], 200);
    }
}