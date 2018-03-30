<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Controllers\DataHandler;

class DataController extends ApiController
{
    public function relevantKey()
    {
        return [
            'key' => DataHandler::getRelevantKey(),
        ];
    }

    public function get(Request $request)
    {
        $key = $request->input('key');
        $currentKey = DataHandler::getRelevantKey();

        if ($key === $currentKey) {
            return response()->json([
                'status' => 'success',
            ], 200);
        }

        return response()->json([
            'status' => 'success',
            'data' => DataHandler::get($request->input('labels')),
            'key' => $currentKey
        ], 200);
    }

    public function cache()
    {
        DataHandler::clearCache();

        return response()->json([
            'status' => 'success',
            'message' => 'Кэш отчищен.'
        ], 200);
    }
}