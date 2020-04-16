<?php

use Illuminate\Support\Facades\Route;
use App\Order;

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
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', 'LoginController@login');
Route::post('/login/proses', 'LoginController@proses');
Route::get('/logout', 'LoginController@logout');

Route::get('/register', 'RegisterController@register');
Route::post('/register/store', 'RegisterController@store');

Route::get('/order', function (){
    return view('order');
});

Route::get('/order_confirm', function (){
    return view('order_confirm');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/order_done','OrderController@store');

Route::get('order_up', 'OrderController@index');

Route::get('choose','OrderController@add_order');

Route::get('view_choice','OrderController@show');

Route::get('payment','PaymentController@index');

Route::get('payment_cek','PaymentController@detail');

Route::get('pay_done','PaymentController@done');

// Route::get('/payment/confirm',function($detail){
//     return view('payment_checkout');
// });


Route::get('cancel','OrderController@cancel');

Route::get('paycek','PaymentController@cek');

Route::get('/orderhistory', 'OrderHistoryController@index');

// Route::get('/orderhistory/see', 'OrderHistoryController@detail');

Route::get('/orderhistory_view','OrderHistoryController@detail');