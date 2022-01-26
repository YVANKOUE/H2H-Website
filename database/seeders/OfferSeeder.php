<?php

namespace Database\Seeders;

use App\Models\Products\Offer;
use App\Models\Products\Product;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offers = Offer::factory()->count(5)->create();

        $offers->each(function($offer){
            Product::get()->take(10)->each(function($product) use($offer){
                $offer->products()->attach($product);
            });
        });
    }
}
