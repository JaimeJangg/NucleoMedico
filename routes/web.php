<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getAllUsers', 'UsersController@getAllUsers');
Route::get('/getAllTypeUser', 'TypeUserController@getAllTypeUser');
Route::post('/saveTypeUser', 'TypeUserController@saveTypeUser');
