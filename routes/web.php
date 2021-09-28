<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    //novel
    Route::get('novel', 'Admin\NovelController@index')->name('admin.novel');
    Route::get('novel/create', 'Admin\NovelController@add')->name('admin.novel.add');
    Route::post('novel/create', 'Admin\NovelController@create')->name('admin.novel.create');
    // Route::get('novel/chapter/{novel_id}', 'Admin\NovelController@chapter')->name('admin.novel.chapter');
    Route::get('novel/edit/{id}', 'Admin\NovelController@edit')->name('admin.novel.edit');
    Route::post('novel/update/{id}', 'Admin\NovelController@update')->name('admin.novel.update');
    Route::get('novel/delete', 'Admin\NovelController@delete')->name('admin.novel.delete');
    
    //chapter
    Route::get('novel/{novel_id}/chapter/', 'Admin\ChapterController@index')->name('admin.chapter');
    Route::post('novel/{novel_id}/chapter/create', 'Admin\ChapterController@create');
    Route::get('novel/{novel_id}/chapter/add', 'Admin\ChapterController@add')->name('admin.chapter.add');

    //profile
    Route::get('profile', 'Admin\ProfileController@index')->name('admin.profile.index');
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
