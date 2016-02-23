@extends('layouts.master')
@section('title', 'Edit')
@section('content')
<section class="bg-primary">
	<div class="container">
		<div class="row text-center" style="color: black">
			{!! Form::model($post, ['route' => ['real.update', $post->id], 'method' => 'PATCH']) !!}
			{!! Form::label('text', 'Please input a title: ') !!}
			{!! Form::text('title') !!}
			{!! '<br>' !!}
			{!! Form::label('textarea', 'Please input some content: ') !!}
			{!! Form::textarea('content', strip_tags($post->content)) !!}
			{!! '<br>' !!}
			{!! Form::label('radio', 'Is it a featured article? ') !!}
			{!! Form::radio('is_featured', true) !!}&nbsp;Yes&nbsp;
			{!! Form::radio('is_featured', false) !!}&nbsp;No&nbsp;
			{!! Form::hidden('user_id') !!}
			{!! '<br>' !!}
			{!! Form::submit('Update') !!}
			{!! Form::close() !!}
		</div>
		@if($errors->any())
		<div class="row" style="height: 100px">
			<br>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<p class="text-faded">
					@foreach($errors->all() as $error)
					{{ $error }}<br>
					@endforeach
				</p>
			</div>
		</div>
		@endif
	</div>
</section>
@endsection
