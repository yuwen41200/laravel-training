@extends('layouts.master')
@section('title', 'Show')
@section('content')
<section class="bg-primary" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">{{ $post->title }}</h2>
				<hr class="light">
				<p class="text-faded">{!! $post->content !!}</p>
				<p class="text-faded">By {{ $post->user_id }} at {{ $post->created_at }}.<br>
				Last Modified: {{ $post->updated_at }}</p>
			</div>
		</div>
	</div>
</section>
@endsection
