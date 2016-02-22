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

	public function create() {
		\App\Post::create([
			'title' => 'My New Title',
			'content' => 'My New Content',
			'user_id' => 5,
		]);
	}

	public function createMore() {
		$post = new \App\Post();
		$post->title = 'My Newest Title';
		$post->content = 'My Newest Content';
		$post->user_id = 6;
		$post->save();
	}

	public function read() {
		$post = \App\Post::find(5);
		dd($post);
	}

	public function readMore() {
		$posts = \App\Post::where('id', '<', 5)
			->orWhere('is_featured', 1)
			->orderBy('updated_at', 'DESC')
			->get();
		dd($posts);
	}

	public function update() {
		$post = \App\Post::find(5);
		$post->update([
			'title' => 'My Updated Title',
			'content' => 'My Updated Content',
			'user_id' => 7,
		]);
	}

	public function updateMore() {
		$post = \App\Post::find(5);
		$post->title = 'My Latest Updated Title';
		$post->content = 'My Latest Updated Content';
		$post->user_id = 8;
		$post->save();
	}

	public function delete() {
		$post = \App\Post::find(6);
		if ($post)
			$post->delete();
	}

	public function deleteMore() {
		\App\Post::destroy(11, 12, 13);
	}

	public function sayHello($name = 'world') {
		return '<center><h1>Hello, '.ucfirst($name).'.</h1></center>';
	}

	public function testRelation() {
		$user = \App\User::find(6);
		echo "<ol>\n";
		foreach ($user->posts as $post)
			echo "<li>".$post->title."</li>\n";
		echo "</ol>\n";
	}

}
