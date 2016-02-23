@extends('layouts.master')
@section('title', 'Show')
@section('content')
<section class="bg-primary" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">{{ $post->title }}</h2>
				<hr class="light">
				<p class="text-faded">{!! nl2br($post->content) !!}</p>
				<p class="text-faded">Posted at: {{ $post->created_at->diffForHumans() }}<br>
				Last Modified: {{ $post->updated_at->diffForHumans() }}<br>
				Author Id: {{ $post->user_id }}</p>
				<a href="{{ route('real.edit', $post->id) }}" class="btn btn-default btn-xl">Edit</a>
			</div>
		</div>
	</div>
</section>
@endsection
