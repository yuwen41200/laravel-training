<?php

Route::pattern('name', '[a-zA-Z0-9]+');

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

Route::get('/', function() {
	return view('index');
});

Route::get('origin', function() {
	return view('default.welcome');
});

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

Route::group(['middleware' => ['web']], function() {

	Route::group(['prefix' => 'posts'], function() {

		Route::get('/', function() {
			return redirect('/');
		});

		Route::get('hello/{name?}', [
			'as' => 'posts.hello',
			'uses' => 'PostsController@hello'
		]);

	});

});
