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
     //dd("流ろにいる");
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create');
     Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
     //Route::get('profile/create','Admin\ProfileController@add');
     Route::get('profile/edit','Admin\ProfileController@edit');
     //dd("流ろにいる");
});  
   
    


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
