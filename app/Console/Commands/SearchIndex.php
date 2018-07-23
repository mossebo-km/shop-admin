<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Shop\Product;
use Carbon\Carbon;

class SearchIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shop:search-index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Индексирование товара для поиска';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $products = Product::with(
            ['attributeOptions' => function($query) {
                $query->with('i18n');
            }],
            ['categories' => function($query) {
                $query->with('i18n');
            }],
            ['styles' => function($query) {
                $query->with('i18n');
            }],
            ['rooms' => function($query) {
                $query->with('i18n');
            }],
            'i18n'
        )
        ->whereNull('indexed_at')
        ->orWhere('indexed_at', '<', Carbon::now()->subDay()->toDateTimeString())
        ->take(10)->get();

        $products->each(function($product) {
            $product->indexed_at = Carbon::now()->toDateTimeString();

            $product->save();
        });
    }
}
