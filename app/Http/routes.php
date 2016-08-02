<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('7-day-challenge', function () {
	return view('challenge');
});

Route::get('challenge-accepted', function () {
	return view('accepted');
});

Route::get('webinar', function () {
	return view('webinar');
});

Route::auth();
