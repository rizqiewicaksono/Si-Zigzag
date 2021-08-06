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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routing untuk CRUD data rekapan
Route::get('/edit/{id}','rekapController@edit');
Route::get('/rekap/profil/{id}','rekapController@profil');



Route::post('/rekap/update/{id}','rekapController@update');
Route::get('/destroy/{id}','rekapController@destroy');



Route::resource('pasien','pasienController');
Route::resource('rekap','rekapController');

Route::get('/cari','rekapController@cari');
Route::get('/cariRekap','rekapController@cari_rekap');
Route::get('/periksa/{id}','pasienController@periksa');
Route::post('/periksa/create','pasienController@periksa_create');
Route::get('/data/pasien','pasienController@data_pasien');