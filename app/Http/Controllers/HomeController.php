<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product = (new Models\Product)->withTranslate('ru')->first();

        // $price = new Models\Price([
        //     'currency_code' => 'EUR',
        //     'price_type_id' => 1,
        //     'value' => 1000,
        // ]);

        // $product->prices()->save($price);

        // $price = Models\Price::first();

        // echo "<pre>";
        // print_r($price->products->toArray());

        // print_r($product->prices()->get()->toArray());
        // exit();

        // $product->prices->first()->display();


        return view('shop.products.list');
    }
}