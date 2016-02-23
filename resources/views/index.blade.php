@extends('layouts.master')
@section('title', 'Index')
@section('content')
<section class="bg-primary" id="about">
	<div class="container">
		@foreach($posts as $post)
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">{{ $post->title }}</h2>
				<hr class="light">
				<p class="text-faded">{!! $post->content !!}</p>
				<a href="{{ route('real.show', $post->id) }}" class="btn btn-default btn-xl">Show !!!</a>
			</div>
		</div>
		<div class="row" style="height: 100px">
			<br>
		</div>
		@endforeach
		<div class="row text-center">
			{!! $posts->render() !!}
		</div>
	</div>
</section>
@endsection
