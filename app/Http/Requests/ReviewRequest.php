<?php

namespace App\Http\Requests;

class ReviewRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function getEntityRules()
    {
        // todo: сделать валидацию ролей.
        return [
            //
        ];
    }
}
