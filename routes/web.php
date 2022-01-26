<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\{RolesController, UsersController, ProfileController, PermissionsController};
use App\Http\Controllers\Admin\Products\{CategoriesController, OffersController, ProductsController, SubCategoriesController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    Route::get('lang/{locale}', [HomeController::class, 'lang'])->name('langue');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'can:users_manage'])->name('dashboard');
    
    Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
        
        //route du profil
        Route::get('profil', [ProfileController::class, 'profil'])->name('profil');
        Route::put('profilinformation', [ProfileController::class, 'profilinformation'])->name('profilinformation');
        Route::post('postupdatepassword', [ProfileController::class, 'postupdatepassword'])->name('postupdatepassword');
        
        Route::middleware(['can:users_manage'])->group(function() {
            //route des utilisateurs
            Route::resource('users', UsersController::class);
            //route des permissions
            Route::resource('permissions', PermissionsController::class);
            //route des roles
            Route::resource('roles', RolesController::class);
            
            // Categories
            Route::resource('categories', CategoriesController::class)->except('create', 'show');
            // SubCategories
            Route::resource('sub-categories', SubCategoriesController::class)->except('create', 'show');
            // Products
            Route::view('products/settings', 'admin.products.settings')->name('products.settings');
            Route::resource('products', ProductsController::class);
            Route::patch('products/{product}/available', [ProductsController::class, 'available'])->name('products.available');

            // Offers
            Route::resource('offers', OffersController::class)->except('show');
        });
    });
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/shop_detail', [HomeController::class, 'shop_detail'])->name('shop_detail');
    Route::view('/about', 'pages.about')->name('about');
    Route::view('/privacy_policy', 'pages.privacy_policy')->name('privacy_policy');
    Route::view('/terms_conditions', 'pages.terms_conditions')->name('terms_conditions');

    //Route::get('/test', [HomeController::class, 'test'])->name('test');

    require __DIR__.'/auth.php';

