<?php

namespace App\Http\Controllers;

use App\Models\Products\Category;
use App\Models\Products\Product;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function test(){
        $categories = Category::orderByDesc('created_at')->get();
        $products = Product::orderByDesc('created_at')->get();
        
        return view('test', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
    public function index()
    {
        $categories = Category::orderByDesc('created_at')->get();
        $products = Product::orderByDesc('created_at')->get();
        
        return view('pages.home', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function shop(){
        $categories = Category::orderByDesc('created_at')->get();
        $products = Product::orderByDesc('created_at')->get();
        
        return view('pages.shop.shop', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
    public function shop_detail(){
        return view('pages.shop.shop_detail');
    }

    public function lang($locale){
        App::setlocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
