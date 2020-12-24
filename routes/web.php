<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusPageController;
use App\Http\Controllers\CartController;
use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/menus', [MenusPageController::class, 'index'])->name('menus');
Route::get('/menus/{food}', [MenusPageController::class, 'show'])->name('menus.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart.cart');
Route::post('/cart/add', [CartController::class, 'store'])->name('cart.store');

Route::get('clear', function () {
    Cart::clear();
});


Route::get('/menus/show', function () {
    return view('menus.show');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');

