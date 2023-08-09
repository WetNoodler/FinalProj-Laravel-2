<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'test'])->name('test');

Route::prefix('/act')->group(function(){

    Route::get('/', function(){
        return to_route('act14.main');
    });

    Route::prefix('/e')->controller(ViewController::class)->group(function(){

        Route::get('/', 'index')->name('act14.main')->middleware('ecomm');
        Route::get('/login', 'login')->name('act14.login');
        Route::get('/register', 'register')->name('act14.register');
        Route::get('/cart', 'cart')->name('act14.cart');
        Route::get('/details', 'details')->name('act14.details');
        Route::get('/profile', 'profile')->name('act14.profile');

        Route::get('/add', 'addProduct')->name('act14.addProduct');

    });

    Route::resource('user', UserController::class);

    Route::resource('product', ProductController::class);

    Route::resource('cart', CartController::class);
});
