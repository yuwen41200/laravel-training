<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller {

	public function index() {
		$posts = \App\Post::all();
		dd($posts);
	}

	public function indexMore() {
		$posts = \App\Post::where('id', '<', 5)
			->orWhere('is_featured', 1)
			->orderBy('updated_at', 'DESC')
			->get();
		dd($posts);
	}

	public function create() {
		\App\Post::create([
			'title' => 'My New Title',
			'content' => 'My New Content',
			'user_id' => 7,
		]);
	}

	public function createMore() {
		$post = new \App\Post();
		$post->title = 'My Newest Title';
		$post->content = 'My Newest Content';
		$post->user_id = 8;
		$post->save();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Hello, World.
	 *
	 * @param  string  $name
	 * @return string
	 */
	public function hello($name = 'world')
	{
		return '<h1>Hello, '.ucfirst($name).'.</h1>';
	}
}
