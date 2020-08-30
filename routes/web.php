<?php

Route::group(['prefix' => 'views'], function() {
    Route::get('layouts/profile', 'Admin\ProfileController@add')->middleware('auth');
    Route::get('layouts/admin', 'Admin\NewsController@add')->middleware('auth');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('XXX', 'AAAController@bbb');

Route::group(['prefix' => 'admin','middleware' => 'auth'],function (){
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create');
     Route::get('profile/create','Admin\ProfileController@add');
     Route::post('profile/create','Admin\ProfileController@create');
     Route::get('news', 'Admin\NewsController@index');
     Route::get('profile/edit','Admin\ProfileController@edit');
     Route::post('profile/edit','Admin\ProfileController@update');
     Route::get('news/edit', 'Admin\NewsController@edit');
     Route::post('news/edit', 'Admin\NewsController@update');
     Route::get('news/delete', 'Admin\NewsController@delete');
});  
   
    


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
