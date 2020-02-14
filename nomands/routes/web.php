<?php

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

//use App\Http\Controllers\Admin\DashboardController;
// use Illuminate\Routing\Route;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CheckoutController;

Route::get('/', 'HomeController@index')
    ->name('home');
Route::get('/detail', 'DetailController@index')
    ->name('detail');
Route::get('/checkout','CheckoutController@index')
    ->name('checkout');
Route::get('/checkout/success','CheckoutController@success')
    ->name('checkout-success');

Route::prefix('admin')
    -> namespace('Admin')
    -> group(function() {
        Route::get('/', 'DashboardController@index')
        -> name('dashboard');
    });




