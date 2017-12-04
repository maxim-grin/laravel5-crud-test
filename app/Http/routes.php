<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::get('/', function () {
	return view('welcome');
})->middleware('guest');

Route::group(['middleware' => ['web']], function () {

	//Car route    
	Route::get('cars','CarController@index');
	Route::get('car/create','CarController@create');
	Route::get('car/{car}/edit','CarController@edit');

	Route::post('car/store','CarController@store');
	Route::patch('car/update/{car}','CarController@update');
	Route::delete('car/{car}','CarController@destroy');

	// Authentication Routes...
	Route::get('login', 'Auth\LoginController@showLoginForm');
	Route::post('login', 'Auth\LoginController@login');
	Route::get('logout', 'Auth\LoginController@logout');

	// Registration Routes...
	Route::get('register', 'Auth\RegisterController@showRegistrationForm');
	Route::post('register', 'Auth\RegisterController@register');

});
