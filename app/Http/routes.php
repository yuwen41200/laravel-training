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
	return redirect('origin');
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

		Route::get('/', ['as' => 'posts.default', function() {
			return redirect('posts/index');
		}]);

		Route::get('index', ['as' => 'posts.index', function() {
			return view('index');
		}]);

		Route::get('about', ['as' => 'posts.about', function() {
			return view('about');
		}]);

		Route::get('services', ['as' => 'posts.services', function() {
			return view('services');
		}]);

		Route::get('portfolio', ['as' => 'posts.portfolio', function() {
			return view('portfolio');
		}]);

		Route::get('contact', ['as' => 'posts.contact', function() {
			return view('contact');
		}]);

		Route::get('hello/{name?}', [
			'as' => 'posts.hello',
			'uses' => 'PostsController@hello'
		]);

	});

});
