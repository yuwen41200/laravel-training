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

Route::get('/', ['as' => 'default', function() {
	return redirect('origin');
}]);

Route::get('origin', ['as' => 'origin', function() {
	return view('default.welcome');
}]);

Route::get('index', ['as' => 'index', function() {
	return view('index');
}]);

Route::get('about', ['as' => 'about', function() {
	return view('about');
}]);

Route::get('services', ['as' => 'services', function() {
	return view('services');
}]);

Route::get('portfolio', ['as' => 'portfolio', function() {
	return view('portfolio');
}]);

Route::get('contact', ['as' => 'contact', function() {
	return view('contact');
}]);

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

		Route::get('/', [
			'as' => 'posts.default',
			function() { return redirect('posts/index'); }
		]);

		Route::get('index', [
			'as' => 'posts.index',
			'uses' => 'PostsController@index'
		]);

		Route::get('create', [
			'as' => 'posts.create',
			'uses' => 'PostsController@create'
		]);

		Route::get('create/more', [
			'as' => 'posts.createMore',
			'uses' => 'PostsController@createMore'
		]);

		Route::get('read', [
			'as' => 'posts.read',
			'uses' => 'PostsController@read'
		]);

		Route::get('read/more', [
			'as' => 'posts.readMore',
			'uses' => 'PostsController@readMore'
		]);

		Route::get('update', [
			'as' => 'posts.update',
			'uses' => 'PostsController@update'
		]);

		Route::get('update/more', [
			'as' => 'posts.updateMore',
			'uses' => 'PostsController@updateMore'
		]);

		Route::get('delete', [
			'as' => 'posts.delete',
			'uses' => 'PostsController@delete'
		]);

		Route::get('delete/more', [
			'as' => 'posts.deleteMore',
			'uses' => 'PostsController@deleteMore'
		]);

		Route::get('hello/{name?}', [
			'as' => 'posts.sayHello',
			'uses' => 'PostsController@sayHello'
		]);

		Route::get('relation', [
			'as' => 'posts.testRelation',
			'uses' => 'PostsController@testRelation'
		]);

	});

});
