<?php

Route::view('/', 'pages.homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events/{event}', 'EventController@apply')->name('events.apply');
