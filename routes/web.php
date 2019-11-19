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

Route::get('/', 'PageController@home');
Route::get('artikel/{slug}', 'PageController@DetailArtikel');
Route::get('laporan-keuangan-pendapatan','FrontController@lapKeuanganPendapatan');
Route::get('laporan-keuangan-realisasi','FrontController@lapKeuanganRealisasi');
Route::get('pengurus-desa','FrontController@pengurusDesa');
Route::post('ubah-periode-laporan-keuangan','FrontController@ubahPeriodeLaporanKeuangan');
Route::get('data-pendidikan-dalam-kk','FrontController@pendidikanDalamKK');
Route::get('data-pekerjaan-dalam-kk','FrontController@pekerjaanDalamKK');
Route::get('data-jk-dalam-kk','FrontController@jkDalamKK');
Route::get('data-umur-dalam-kk','FrontController@umurDalamKK');
Route::get('data-perkawinan-dalam-kk','FrontController@perkawinanDalamKK');
Auth::routes();
Route::Resource('user','UserController');
Route::group(['prefix' => 'admin'], function () {
    Route::Resource('artikel','ArtikelController');
    Route::Resource('penduduk','PendudukController');
    Route::Resource('penjabatdesa','PenjabatDesaController');
    Route::Resource('kartukeluarga','KartuKeluargaController');
    Route::resource('dusun','DusunController');
    Route::resource('pendapatan','PendapatanController');
    Route::resource('realisasi','RealisasiController');
    Route::get('komponendana/realisasi','KomponenDanaController@realisasi');
    Route::resource('komponendana','KomponenDanaController');
    Route::get('setting','HomeController@setting');
    Route::post('setting','HomeController@savesetting');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');