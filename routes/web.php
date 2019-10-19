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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::Resource('user','UserController');
Route::get('product/excel','ProductController@excel');
Route::Resource('product','ProductController');
Route::Resource('role','RoleController');
Route::Resource('permission','PermissionController');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('setup','PageController@setup');
Route::get('test','PageController@test');
