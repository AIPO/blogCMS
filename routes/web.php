<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/posts/{post}', 'PostController@show');
Route::get('/carts', function (){
    $carts=\App\Cart::all();
    return view('carts.index',compact('carts'));
});
Route::post('/carts', function () {
    App\Cart::create(request([
        'title', 'description'
    ]));
});
