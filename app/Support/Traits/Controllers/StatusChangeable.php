<?php

namespace App\Support\Traits\Controllers;

use App\Events\Entity\EntityStatusChanged;

trait StatusChangeable
{
    /**
     * Смена статуса сущности.
     *
     * @param  Integer
     * @return Repsonse
     */
    public function status($id)
    {
        $model = $this->getModel($id);

        $model->statusToggle();

        \Event::fire(new EntityStatusChanged($model));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang("status." . ($model->enabled ? 'enabled' : 'disabled'), ['id' => $model[$model->getKeyName()]])
        ], 201);
    }
}