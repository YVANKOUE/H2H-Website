<?php

use App\Models\Products\Offer;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

    if (!function_exists('root_path')) {
        function root_path(){
            return App::environment('production') ? 'files' : 'storage';
        }
    }

    if (! function_exists('products_in_offer')) {
        function products_in_offer($to){
            $collection = collect();
            $offers = Offer::where('to', '<', $to)->get()->each(function($offer) use($collection){
                return $collection->push($offer->products);
            });

            return implode(',', $offers->isNotEmpty() ? $collection->first()->pluck('id')->toArray() : []);
        }
    }
?>