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
Route::group(['prefix' => 'admin'], function () {
    Route::get('novel/create', 'Admin\novelController@add');
});

Route::get('XXX', 'AAAController@bbb');

Route::group(['prefix' => 'admin'], function () {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('novel/create', 'Admin\novelController@add')->middleware('auth');
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@add')->middleware('auth');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('novel/create', 'Admin\novelController@add');
    Route::post('novel/create', 'Admin\novelController@create');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('novel/create', 'Admin\novelController@add');
    Route::post('novel/create', 'Admin\novelController@create');
    Route::get('novel', 'Admin\novelController@index');
    Route::get('novel/edit', 'Admin\novelController@edit');
    Route::post('novel/edit', 'Admin\novelController@update');
    Route::get('novel/delete', 'Admin\novelController@delete');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile', 'Admin\ProfileController@index');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('profile/delete', 'Admin\ProfileController@delete');
});
Route::group(['prefix' => 'novel'], function () {
    Route::get('/', 'NovelController@index')->name('novel');
    Route::get('/{novel_id}', 'NovelController@chapter')->name('novel');
    Route::get('/{novel_id}/{episode_id}', 'NovelController@episode')->name('novel');
});

Route::get('/profile', 'ProfilesController@index');
