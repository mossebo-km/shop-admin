<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Shop\Promo\PromoCode;
use Carbon\Carbon;

class CalculatePromoUsesCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shop:promo-uses-counts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Подсчет использований промо кодов';

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
        $promoCodes = PromoCode::get();

        foreach ($promoCodes as $promoCode) {
            $use = $promoCode->uses()->where('created_at', '>', $promoCode->updated_at)->first();

            if (! $use) {
                continue;
            }

            $promoCode->uses_count = $promoCode->uses()->count();

            $promoCode->save();
        }
    }
}
