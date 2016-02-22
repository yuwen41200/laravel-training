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

}
