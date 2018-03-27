<?php

namespace App\Support\Traits\Controllers;

use App\Events\EntityDeleted;

trait Deleteable
{
    /**
     * Удаление сущности.
     *
     * @param  Integer
     * @return Response
     */
    public function delete($id)
    {
        $model = $this->getModel($id);

        $model->delete();

        \Event::fire(new EntityDeleted($model));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang("deleted", ['id' => $model[$model->getKeyName()]])
        ], 200);
    }
}