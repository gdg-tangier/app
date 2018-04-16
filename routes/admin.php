<?php

Route::get('/events', 'Admin\\EventController@index')->name('events.index');

Route::get('/events/{event}/attendees', 'Admin\\EventAttendeeController@index')->name('events.attendees.index');

Route::post('/events/{event}/attendees', 'Admin\\EventAttendeeController@store')->name('events.attendees.store');

Route::get('/events/{event}/check-in', 'Admin\\EventCheckInController@index')->name('events.checkin.index');

Route::patch('/events/{event}/check-in', 'Admin\\EventCheckInController@update')->name('events.checkin.update');
