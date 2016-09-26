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

Route::get('challenge/optimizing-your-homepage', function () {
	return view('challenge.day1');
});
Route::get('challenge/great-content', function () {
	return view('challenge.day2');
});
Route::get('challenge/power-guest-posting', function () {
	return view('challenge.day3');
});
Route::get('challenge/using-content-upgrades', function () {
	return view('challenge.day4');
});
Route::get('challenge/boosting-conversions', function () {
	return view('challenge.day5');
});
Route::get('challenge/power-giveaways', function () {
	return view('challenge.day6');
});
Route::get('challenge/utilizing-webinars', function () {
	return view('challenge.day7');
});

Route::get('pinterest', function () {
	return view('pinterest');
});

Route::get('awesome', function () {
	return view('awesome');
});

Route::get('preorder', function () {
	return view('preorder');
});

Route::get('order', function () {
	return view('order');
});

Route::get('course', function () {
	return view('course');
});
Route::group(['middleware' => 'auth'], function () {
	Route::get('dashboard', 'DashboardController@index');
	Route::resource('module', 'ModuleController');
	Route::resource('section', 'SectionController');
	Route::resource('question', 'QuestionController');
	Route::resource('answer', 'AnswerController');

	Route::get('student/{id}', 'UserController@profile');
});

Route::auth();
