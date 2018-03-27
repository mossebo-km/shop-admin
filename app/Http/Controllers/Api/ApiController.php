<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        if (! \Auth::guard('admin.api')->check()) {
            throw new HttpResponseException(response()->json([
                'status' => 'error',
                'redirect' => '/login',
            ], 401));
        }
    }

    public function getModel($id)
    {
        return static::$modelClass::findOrFail($id);
    }

    protected function lang($identif, $params = null, $useModelClass = true)
    {
        return \Lang::get(
            "admin." . ($useModelClass ? static::$modelClass . '.' : '') . $identif,
            $params ?: []
        );
    }
}