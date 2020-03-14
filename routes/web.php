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
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
Route::post('news/create', 'Admin\NewsController@create');
Route::post('profile/create', 'Admin\ProfileController@create');
Route::post('profile/edit', 'Admin\ProfileController@update');
 Route::get('news', 'Admin\NewsController@index')->middleware('auth'); // 追記
});
Route::get('admin/news/create', 'Admin\NewsController@add');
Route::get('XXXXXX', 'Admin\AAAController@bbb');
Route::get('admin/profile/create', 'Admin\ProfileController@add');
Route::get('admin/profile/edit', 'Admin\ProfileController@edit');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
});    
});
});