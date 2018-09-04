<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Api\ApiController;

use App\Models\Shop\banner\Banner;

use App\Http\Resources\Shop\Banner\BannerEditResource;
use App\Http\Resources\Shop\Banner\BannerTableResource;

use App\Support\Traits\Controllers\Creatable;
use App\Support\Traits\Controllers\Updatable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;
use Illuminate\Pagination\LengthAwarePaginator;

class BannerController extends ApiController
{
    use Creatable, Updatable, Deleteable, StatusChangeable, PositionChangeable;

    protected static $modelClass = Banner::class;
    protected static $entityName = 'banner';
    protected static $editResource = BannerEditResource::class;
    protected static $tableResource = BannerTableResource::class;

    public function index()
    {
        $pagination = $this->_paginate($this->request->all());

        return [
            'banners' => static::toResource($pagination->getCollection()),
            'page' => $pagination->currentPage(),
            'perPage' => $pagination->perPage(),
            'totalRows' => $pagination->total(),
        ];
    }

        public function _paginate(Array $params = []): LengthAwarePaginator
        {
            $pagination = $this->_makePagination($params);

            if ($pagination->isEmpty() && $params['page'] > 1) {
                $page = round($pagination->total() / $params['perPage']);
                $params['page'] = $page <= 0 ? 1 : $page;

                $pagination = $this->_makePagination($params);
            }

            return $pagination;
        }

        public function _makePagination(Array $params): LengthAwarePaginator
        {
            extract($params, EXTR_OVERWRITE);

            $query = static::$modelClass::with('i18n', 'places');

//            if ($type === 'enabled') {
//                $query = $query->where('enabled', true);
//            }

            if ($place !== 'all') {
                $bannersTableName = config('tables.Banners');
                $relationTableName = config('tables.BannerPlaceRelations');

                $query
                    ->join("{$relationTableName}", function($join) use($bannersTableName, $relationTableName, $place) {
                        $join->on("{$bannersTableName}.id", '=', "{$relationTableName}.banner_id")
                            ->where("{$relationTableName}.place_id", $place);
                    })
                    ->groupBy(\DB::raw("{$bannersTableName}.id, {$relationTableName}.place_id, {$relationTableName}.banner_id"));
            }

            return $query->orderBy('id', 'desc')
                ->paginate($perPage, null, null, $page);
        }
}