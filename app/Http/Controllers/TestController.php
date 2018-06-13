<?php

namespace App\Http\Controllers;

use App\Models\Shop\RoomProduct;
use App\Models\Shop\CategoryProduct;
use App\Models\Shop\ProductAttributeOption;

class TestController extends Controller
{
//    public function imageConverter($id)
//    {
//        $product = Product::where('id', $id)->first();
//        $tempImages = $product->getMedia('images') ?: [];
//
//        foreach ($tempImages as $image) {
//            $image = $image->move($product, 'temp');
//            $image->move($product, 'images');
//        }
//    }

    public function enableLanguages()
    {
        \App\Models\Language::where('enabled', false)->update([
            'enabled' => true
        ]);

        \App\Http\Controllers\DataHandler::clearAllCache();

        return redirect('/');
    }

    public function disableLanguages()
    {
        \App\Models\Language::where('default', false)->update([
            'enabled' => false
        ]);

        \App\Http\Controllers\DataHandler::clearAllCache();

        return redirect('/');
    }























    protected $azazazium = [
        2 => [
            384 => 14,
            372 => 13,
            6 => 2,
            366 => 11,
            111 => 61,
            198 => 60,
            217 => 21,
            70 => 17,
            153 => 63,
            48 => 16,
            208 => 62,
            152 => 22,
            130 => 57,
            121 => 19,
            85 => 20,
            140 => 58,
            164 => 59,
            107 => 26,
            173 => 28,
            98 => 56,
            74 => 25,
            357 => 40,
            325 => 35,
            347 => 38,
            316 => 34,
            334 => 36,
            232 => 33,
            214 => 51,
            270 => 42,
            253 => 54,
            182 => 50,
            278 => 47,
            229 => 52,
            287 => 30,
            193 => 46,
            243 => 53,
            262 => 55,
            307 => 43,
            296 => 44,

        ],

        1 => [
            386 => 14,
            374 => 13,
            7 => 2,
            367 => 11,
            381 => 12,
            113 => 61,
            203 => 18,
            219 => 21,
            80 => 17,
            158 => 63,
            49 => 16,
            155 => 22,
            132 => 57,
            123 => 19,
            87 => 20,
            142 => 58,
            166 => 59,
            109 => 26,
            175 => 28,
            100 => 56,
            76 => 25,
            359 => 40,
            327 => 35,
            349 => 38,
            342 => 37,
            318 => 34,
            336 => 36,
            235 => 33,
            218 => 51,
            272 => 42,
            255 => 54,
            186 => 50,
            280 => 47,
            233 => 52,
            289 => 30,
            195 => 46,
            245 => 53,
            264 => 55,
            298 => 44,
            305 => 45,

        ],

        8 => [
            390 => 14,
            378 => 13,
            370 => 11,
            149 => 61,
            201 => 60,
            223 => 21,
            94 => 17,
            69 => 16,
            161 => 22,
            136 => 57,
            128 => 19,
            96 => 20,
            147 => 58,
            170 => 59,
            119 => 26,
            179 => 28,
            105 => 56,
            83 => 25,
            363 => 40,
            331 => 35,
            353 => 38,
            344 => 37,
            322 => 34,
            338 => 36,
            313 => 33,
            226 => 51,
            275 => 42,
            259 => 54,
            191 => 50,
            284 => 47,
            240 => 52,
            293 => 30,
            204 => 46,
            251 => 53,
            267 => 55,
            302 => 44,

        ],

        5 => [
            391 => 14,
            379 => 13,
            8 => 2,
            369 => 11,
            148 => 61,
            222 => 21,
            92 => 17,
            66 => 16,
            162 => 22,
            137 => 57,
            127 => 19,
            95 => 20,
            146 => 58,
            171 => 59,
            118 => 26,
            180 => 28,
            104 => 56,
            81 => 25,
            364 => 40,
            332 => 35,
            354 => 38,
            345 => 37,
            323 => 34,
            339 => 36,
            314 => 33,
            227 => 51,
            276 => 42,
            260 => 54,
            190 => 50,
            285 => 47,
            241 => 52,
            294 => 30,
            206 => 46,
            250 => 53,
            268 => 55,
            303 => 44,

        ],

        7 => [
            383 => 14,
            371 => 13,
            5 => 2,
            365 => 11,
            380 => 12,
            110 => 61,
            202 => 18,
            215 => 21,
            71 => 17,
            150 => 63,
            65 => 16,
            207 => 62,
            151 => 22,
            129 => 57,
            120 => 19,
            84 => 20,
            139 => 58,
            163 => 59,
            106 => 26,
            172 => 28,
            97 => 56,
            72 => 25,
            356 => 40,
            324 => 35,
            346 => 38,
            340 => 37,
            315 => 34,
            333 => 36,
            231 => 33,
            212 => 51,
            269 => 42,
            252 => 54,
            181 => 50,
            277 => 47,
            228 => 52,
            286 => 30,
            192 => 46,
            242 => 53,
            261 => 55,
            295 => 44,
            304 => 45,
            311 => 32,
        ],

        6 => [
            389 => 14,
            377 => 13,
            9 => 2,
            138 => 61,
            91 => 17,
            184 => 63,
            211 => 62,
            160 => 22,
            135 => 57,
            126 => 19,
            93 => 20,
            145 => 58,
            169 => 59,
            117 => 26,
            178 => 28,
            103 => 56,
            79 => 25,
            362 => 40,
            330 => 35,
            352 => 38,
            321 => 34,
            225 => 51,
            274 => 42,
            258 => 54,
            189 => 50,
            283 => 47,
            239 => 52,
            292 => 30,
            199 => 46,
            248 => 53,
            266 => 55,
            301 => 44,

        ],

        4 => [
            388 => 14,
            376 => 13,
            10 => 2,
            368 => 11,
            382 => 12,
            205 => 18,
            220 => 21,
            89 => 17,
            183 => 63,
            68 => 16,
            213 => 62,
            159 => 22,
            134 => 57,
            125 => 19,
            90 => 20,
            144 => 58,
            168 => 59,
            116 => 26,
            177 => 28,
            102 => 56,
            78 => 25,
            361 => 40,
            329 => 35,
            351 => 38,
            343 => 37,
            320 => 34,
            337 => 36,
            249 => 33,
            224 => 51,
            273 => 42,
            257 => 54,
            188 => 50,
            282 => 47,
            238 => 52,
            291 => 30,
            197 => 46,
            247 => 53,
            310 => 43,
            300 => 44,
            306 => 45,

        ],

        3 => [
            387 => 14,
            375 => 13,
            4 => 2,
            114 => 61,
            82 => 17,
            67 => 16,
            210 => 62,
            157 => 22,
            133 => 57,
            124 => 19,
            88 => 20,
            143 => 58,
            167 => 59,
            115 => 26,
            176 => 28,
            101 => 56,
            77 => 25,
            360 => 40,
            328 => 35,
            350 => 38,
            319 => 34,
            236 => 33,
            221 => 51,
            256 => 54,
            187 => 50,
            281 => 47,
            237 => 52,
            290 => 30,
            196 => 46,
            246 => 53,
            265 => 55,
            309 => 43,
            299 => 44,
            312 => 32,
        ],
    ];

    protected $azazazium2 = [
        96 => 1,
        97 => 2,
        98 => 3,
        99 => 4,
        100 => 5,
        101 => 6,
        102 => 7,
        103 => 8,
        104 => 9,
        105 => 10,
        106 => 11,
        107 => 12,
        108 => 13,
        109 => 14,
        110 => 15,
        111 => 16,
        136 => 17,
        138 => 18,
        139 => 19
    ];

    public function test() {
        $this->stylesToCategories();
        $this->roomsToCategories();
    }

    protected function stylesToCategories() {
        foreach ($this->azazazium2 as $optionId => $styleId) {
            $productAttributeOptions = ProductAttributeOption::with('product')->where('option_id', $optionId)->get();

            ProductAttributeOption::where('option_id', $optionId)->delete();

            foreach ($productAttributeOptions as $productAttributeOption) {
                $product = $productAttributeOption->product;

                $product->styleRelations()->create([
                    'style_id' => $this->azazazium2[$productAttributeOption->option_id]
                ]);
            }
        }
    }

    public function roomsToCategories() {
        $bundle = [];

        foreach ($this->azazazium as $roomId => $data) {
            foreach ($data as $categoryId => $parentCategoryId) {
                if (!isset($bundle[$parentCategoryId])) {
                    $bundle[$parentCategoryId] = [];
                }

                $bundle[$parentCategoryId][] = $categoryId;
            }
        }

        foreach ($bundle as $parentCategoryId => $categoriesIds) {
            $existingCategories = \Categories::getCollection()->where('parent_id', $parentCategoryId);

            $existingCategoriesIds = array_column($existingCategories->toArray(), 'id');

            foreach ($categoriesIds as $id) {
                $index = array_search($id, $existingCategoriesIds);

                if ($index === false) {
                    echo "ID не обнаружен: " . $id . ' в ' . $parentCategoryId . '.' . PHP_EOL;
                    echo "<br>";
                    exit();
                }
                else {
                    unset($existingCategoriesIds[$index]);
                }
            }

            if (count($existingCategoriesIds) > 0) {
                echo $parentCategoryId . ' имеет не заполненные id: ' . json_encode($existingCategoriesIds, JSON_UNESCAPED_UNICODE);
                echo "<br>";
                exit();
            }
        }

        foreach ($this->azazazium as $roomId => $data) {
            $categoryProducts = CategoryProduct::with('product')->whereIn('category_id', array_keys($data))->get();
            CategoryProduct::whereIn('category_id', array_keys($data))
                ->whereIn('product_id', array_column($categoryProducts->toArray(), 'product_id'))
                ->delete();

            foreach ($categoryProducts as $categoryProduct) {
                $product = $categoryProduct->product;

                try {
                    $product->roomRelations()->create([
                        'room_id' => $roomId
                    ]);
                }
                catch(\Exception $e) {

                }

                try {
                    $product->categoryRelations()->create([
                        'category_id' => $data[$categoryProduct->category_id]
                    ]);
                }
                catch(\Exception $e) {

                }
            }
        }





    }
}
