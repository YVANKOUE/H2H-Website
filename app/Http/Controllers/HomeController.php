<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeController extends Controller
{
    public function test(){
        return view('test');
    }
    public function index(){
        return view('pages.home');
    }
    public function shop(){
        return view('pages.shop.shop');
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
