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
    return view('home');
});

Route::get('/data-kupon', function () {
    return view('data-kupon');
});

Route::get('/data-user', function () {
    return view('data-user');
});

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/profile', function() {
    return view('profile');
});
