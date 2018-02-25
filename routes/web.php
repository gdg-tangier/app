<?php

Route::view('/', 'pages.homepage');
Route::view('/moroccan-success-stories', 'pages.stories');
Route::view('/interviews', 'pages.interviews');
Route::view('/announcements', 'pages.announcements');
Route::view('/ask', 'pages.ask');
Route::view('/opportunities', 'pages.opportunities');
Route::view('/members', 'pages.members');
Route::view('/share', 'pages.share');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/{user}', 'UserController@show')->name('users.show');
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::patch('/users/{user}', 'UserController@update')->name('users.update');

Route::get('/events/{event}', 'EventController@apply')->name('events.apply');

Route::post('/events/{event}/applications', 'EventApplicationController@store')->name('events.applications.store');
Route::patch('/invitations/{invitation}', 'InvitationController@update')->name('invitations.update');

// Admin

Route::get('/admin/events', 'Admin\\EventController@index')->name('admin.events.index');
Route::get('/admin/events/{event}/attendees', 'Admin\\EventAttendeeController@index')->name('admin.events.attendees.index');
