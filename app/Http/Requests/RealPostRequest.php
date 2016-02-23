<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RealPostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'title' => 'required|string',
			'content' => 'required|string|min:10|max:1000',
			'is_featured' => 'required|boolean',
			'user_id' => 'required|integer',
		];
	}

}
