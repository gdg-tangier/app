<?php

Route::view('/', 'pages.homepage');
Route::view('/moroccan-success-stories', 'pages.stories');
Route::view('/interviews', 'pages.interviews');
Route::view('/announcements', 'pages.announcements');
Route::view('/ask', 'pages.ask');
Route::view('/opportunities', 'pages.opportunities');
Route::view('/members', 'pages.members');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/{user}', 'UserController@show')->name('users.show');
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::patch('/users/{user}', 'UserController@update')->name('users.update');