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

//ユーザー画面遷移
Route::get('/', 'GoodsController@index');
Route::get('/list', 'ListController@index');
Route::get('/create', 'GoodsController@add')->middleware('auth');
Route::post('/create', 'GoodsController@create')->middleware('auth');
Route::get('/detail','DetailController@index');

//管理画面遷移
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('item', 'Admin\ItemController@index');
    Route::get('create', 'Admin\ItemController@add');
    Route::post('create', 'Admin\ItemController@create');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
