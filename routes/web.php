<?php

Route::view('/', 'pages.homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::patch('/users/{user}', 'UserController@update')->name('users.update');

Route::get('/events/{event}', 'EventController@apply')->name('events.apply');