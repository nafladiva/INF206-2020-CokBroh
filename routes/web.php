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
    return view('landing');
});

Route::get('/data-kupon', function () {
    return view('data-kupon');
});

Route::get('/data-user', function () {
    return view('data-user');
});

Route::get('/login-admin', function () {
    return view('login-admin');
});

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');
Route::get('/kuponku', 'ProfileController@kupon');
Route::get('/daftarkupon', function () {
    return view('daftarKupon');
});

Route::get('/howto', 'LandingController@howto');
Route::get('/about', 'LandingController@about');