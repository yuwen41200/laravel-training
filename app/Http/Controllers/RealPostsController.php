<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RealPostsController extends Controller {

	public function main() {
		$posts = \App\Post::where('is_featured', 1)
			->orderBy('updated_at', 'DESC')
			->get();
		$data = compact('posts');
		return view('main', $data);
	}

	public function index() {
		$posts = \App\Post::orderBy('created_at', 'DESC')
			->get();
		$data = compact('posts');
		return view('index', $data);
	}

	public function create() {
		return view('create');
	}

	public function show($id) {
		$post = \App\Post::findOrFail($id);
		$data = compact('post');
		return view('show', $data);
	}

	public function edit($id) {
		return view('edit');
	}

	public function destroy($id) {
		return view('destroy');
	}

}
