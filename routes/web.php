<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;



// Admin Routes
Route::prefix('admin/')->name('admin.')->middleware('auth','checkAdmin')->group(function(){

    //Admin Page
    Route::get('/',[AdminController::class,'index'])->name('index');

    //categories
    Route::get('categories/trash', [CategoryController::class, 'trash'])->name('categories.trash');
    Route::get('categories/{id}/restore', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('categories/{id}/forcedelete', [CategoryController::class, 'forcedelete'])->name('categories.forcedelete');
    Route::resource('categories',CategoryController::class);

    //sliders
    Route::get('sliders/trash', [SliderController::class, 'trash'])->name('sliders.trash');
    Route::get('sliders/{id}/restore', [SliderController::class, 'restore'])->name('sliders.restore');
    Route::delete('sliders/{id}/forcedelete', [SliderController::class, 'forcedelete'])->name('sliders.forcedelete');
    Route::resource('sliders',SliderController::class);

    //products
    Route::get('products/trash', [ProductController::class, 'trash'])->name('products.trash');
    Route::get('products/{id}/restore', [ProductController::class, 'restore'])->name('products.restore');
    Route::delete('products/{id}/forcedelete', [ProductController::class, 'forcedelete'])->name('products.forcedelete');
    Route::resource('products',ProductController::class);

    //clients
    Route::get('clients/trash', [ClientController::class, 'trash'])->name('clients.trash');
    Route::get('clients/{id}/restore', [ClientController::class, 'restore'])->name('clients.restore');
    Route::delete('clients/{id}/forcedelete', [ClientController::class, 'forcedelete'])->name('clients.forcedelete');
    Route::resource('clients',ClientController::class);

});

// Site Routes
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/cart', [SiteController::class, 'cart'])->name('site.cart');
Route::get('/category/{id}', [SiteController::class, 'category'])->name('site.category');
Route::get('/checkout', [SiteController::class, 'checkout'])->name('site.checkout');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('/detail/{id}', [SiteController::class, 'detail'])->name('site.detail');
Route::get('/shop', [SiteController::class, 'shop'])->name('site.shop');
Route::post('/add-to-cart', [SiteController::class, 'add_to_cart'])->name('site.add_to_cart');
Route::delete('/remove-from-cart/{id}', [SiteController::class, 'remove_from_cart'])->name('site.remove_from_cart');
Route::post('/add-review', [SiteController::class, 'add_review'])->name('site.add_review');
Route::post('/contact', [SiteController::class, 'contact_data'])->name('site.contact_data');
Route::get('/search', [SiteController::class, 'search'])->name('site.search');
Route::view('not-allowed', 'not-allowed');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/adminn',function(){
    return view('admin.indexx');
})->middleware('auth','role:admin')->name('admin.indexx');
