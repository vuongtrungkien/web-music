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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', 'SongController@getTopOne')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@showPageAdmin')->name('admin.index');
    Route::get('songs/upload', 'AdminController@getFormUploadMusic')->name('admin.upload_music');
    Route::post('songs/upload', 'AdminController@storeMusic')->name('admin.store_music');
    Route::get('/singers/add', 'SingerController@showPageAddSinger')->name('admin.create_singer');
    Route::get('/singers', 'SingerController@showPageListSinger')->name('admin.list_singers');
    Route::post('/singers/add', 'SingerController@storeSinger')->name('admin.store_singer');
    Route::get('/categories/add', 'CategoryController@showPageAddCategory')->name('admin.create_category');
    Route::post('/categories/add', 'CategoryController@storeCategory')->name('admin.store_category');
});
