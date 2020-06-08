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

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');
Route::get('/kuponku', 'ProfileController@kupon')->name('kuponku');
Route::get('/inputkupon', function () {
    return view('inputKupon');
});
Route::post('/inputkupon/go', 'KuponController@insert_image');

Route::get('/daftarkupon', 'KuponController@index');

Route::get('/store_image/fetch_image/{id}', 'KuponController@fetch_image');
Route::post('/ambilkupon/{id_user}/{id_kupon}', 'KuponController@ambil_kupon');