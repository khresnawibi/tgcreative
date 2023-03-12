<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/blog', [WebController::class, 'blog'])->name('blog');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/team', [WebController::class, 'team'])->name('team');
Route::get('/testimonial', [WebController::class, 'testimonial'])->name('testimonial');
Route::get('/services', [WebController::class, 'services'])->name('services');
Route::get('/portfolio', [WebController::class, 'portofolio'])->name('portfolio');
Route::get('/pricelist', [WebController::class, 'pricelist'])->name('pricelist');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Auth::routes(['register' => false, 'reset' => false, 'verify' => false, 'confirm' => false]);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => ['auth']], function() {
        Route::resource('/product-categories', \App\Http\Controllers\User\ProductCategoryController::class);
        Route::resource('/products', \App\Http\Controllers\User\ProductController::class);
    });
});
