<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class DataController extends Controller
{
    protected static $cacheKey = 'interactionData';

    public function keyIsRelevant($key)
    {
        return $key == self::getRelevantKey();
    }

    public static function getRelevantKey()
    {
        // todo: Добавить отдельное кэширование для каждого типа данных.

        return \Cache::remember(self::$cacheKey, 18000, function () {
            return md5(uniqid());
        });
    }

    public static function clearCache($dataType)
    {
        // todo: Добавить отчистку кэша по типу данных.

        \Cache::flush();
    }

    public function relevantKey()
    {
        return [
            'key' => $this->getRelevantKey(),
        ];
    }

    public function get(Request $request)
    {
        $key = $request->input('key');
        $currentKey = self::getRelevantKey();

        if ($key === $currentKey) {
            return response()->json([
                'status' => 'success',
            ], 200);
        }

        $labels = $request->input('labels');

        $data = [];

        foreach ($labels as $label) {
            $methodName = '_get';

            foreach (explode('-', $label) as $value) {
                $methodName .= ucfirst($value);
            }

            if (method_exists($this, $methodName)) {
                try {
                    $data[$label] = call_user_func([$this, $methodName]);
                } catch (\Exception $e) {
                    dd($e);
                }
            }
        }

        return response()->json([
            'status' => 'success',
            'data' => $data,
            'key' => $currentKey
        ], 200);
    }

    private function _getCategories()
    {
        return CategoryController::all();
    }

    private function _getCategoriesTree()
    {
        return CategoryController::getTree(0, true);
    }

    private function _getLanguages()
    {
        return Models\Language::all();
    }
}