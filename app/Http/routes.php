<?php

Route::pattern('name', '[a-zA-Z]+');

Route::pattern('id', '[0-9]+');

Route::get('/', [
	'as' => 'default',
	function() { return redirect('origin'); }
]);

Route::get('origin/{locale?}', [
	'as' => 'origin',
	function($locale = 'zh-Hant-TW') {
		App::setLocale($locale);
		return view('default.welcome');
	}
]);

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

	Route::group(['prefix' => 'real'], function() {

		Route::get('/', [
			'as' => 'real.default',
			function() { return redirect('real/main'); }
		]);

		Route::get('main', [
			'as' => 'real.main',
			'uses' => 'RealPostsController@main'
		]);

		Route::get('index', [
			'as' => 'real.index',
			'uses' => 'RealPostsController@index'
		]);

		Route::get('create', [
			'as' => 'real.create',
			'uses' => 'RealPostsController@create'
		]);

		Route::post('store', [
			'as' => 'real.store',
			'uses' => 'RealPostsController@store'
		]);

		Route::get('{id}', [
			'as' => 'real.show',
			'uses' => 'RealPostsController@show'
		]);

		Route::get('{id}/edit', [
			'as' => 'real.edit',
			'uses' => 'RealPostsController@edit'
		]);

		Route::get('{id}/destroy', [
			'as' => 'real.destroy',
			'uses' => 'RealPostsController@destroy'
		]);

	});

});
