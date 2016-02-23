<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\RealPostRequest;
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
			->paginate(5);
		$data = compact('posts');
		return view('index', $data);
	}

	public function create() {
		return view('create');
	}

	public function store(RealPostRequest $request) {
		$post = \App\Post::create($request->all());
		return redirect()->route('real.show', $post->id);
	}

	public function show($id) {
		try {
			$post = \App\Post::findOrFail($id);
		}
		catch (ModelNotFoundException $e) {
			$post = \App\Post::all()->random();
		}
		$user = \App\User::find($post->user_id);
		$data = compact('post', 'user');
		return view('show', $data);
	}

	public function edit($id) {
		$post = \App\Post::find($id);
		if (is_null($post))
			return redirect()->route('real.main')
				->with('message', 'Invalid Id !!!');
		$data = compact('post');
		return view('edit', $data);
	}

	public function update(RealPostRequest $request, $id) {
		$post = \App\Post::find($id);
		if (is_null($post))
			return redirect()->route('real.main')
				->with('message', 'Invalid Id !!!');
		$post->update($request->all());
		return redirect()->route('real.show', $post->id);
	}

	public function destroy($id) {
		$post = \App\Post::find($id);
		if (is_null($post))
			return redirect()->route('real.main')
				->with('message', 'Invalid Id !!!');
		$post->delete();
		return redirect()->route('real.index');
	}

}
