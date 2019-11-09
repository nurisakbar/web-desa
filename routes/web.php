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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MenuController@home');
Route::get('detail-artikel/{id}', 'MenuController@DetailArtikel');

Auth::routes();
Route::Resource('user','UserController');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Route::Resource('artikel','ArtikelController');
    Route::Resource('penduduk','PendudukController');
    Route::Resource('penjabatdesa','PenjabatDesaController');
    Route::Resource('kartukeluarga','KartuKeluargaController');
    Route::resource('dusun','DusunController');
    Route::get('setting','HomeController@setting');
});


Route::get('data-desa', 'MenuController@DataDesa');
Route::get('tranparansi', 'MenuController@Tranparansi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
