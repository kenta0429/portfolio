<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('novel', 'Admin\NovelController@index');
    Route::get('novel/create', 'Admin\NovelController@add')->name('admin.novel.add');
    Route::get('novel/chapter', 'Admin\NovelController@chapter')->name('admin.novel.chapter');

    Route::post('novel/create', 'Admin\NovelController@create');
    Route::get('novel/edit', 'Admin\NovelController@edit');
    Route::post('novel/edit', 'Admin\NovelController@update');
    Route::get('novel/delete', 'Admin\NovelController@delete')->name('admin.novel.delete');;

    Route::get('profile', 'Admin\ProfileController@index');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('profile/delete', 'Admin\ProfileController@delete');
});

Route::group(['prefix' => 'novel'], function () {
    Route::get('/', 'NovelController@index')->name('novel');
    Route::get('/{novel_id}', 'NovelController@chapter')->name('novel');
    Route::get('/{novel_id}/{episode_id}', 'NovelController@episode')->name('novel');
});

//TODO name('novel') -> name('write')
Route::get('writer/{user_id}', 'NovelController@writer')->name('novel');

Route::get('/profile', 'ProfilesController@index');
