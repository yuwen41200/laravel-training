@extends('layouts.master')
@section('title', 'Create')
@section('content')
<section class="bg-primary">
	<div class="container">
		<div class="row text-center" style="color: black">
			{!! Form::open(['route' => 'real.store', 'method' => 'POST']) !!}
			{!! Form::label('text', 'Please input a title: ') !!}
			{!! Form::text('title') !!}
			{!! '<br>' !!}
			{!! Form::label('textarea', 'Please input some content: ') !!}
			{!! Form::textarea('content') !!}
			{!! '<br>' !!}
			{!! Form::label('radio', 'Is it a featured article? ') !!}
			{!! Form::radio('is_featured', '1') !!}&nbsp;Yes&nbsp;
			{!! Form::radio('is_featured', '0') !!}&nbsp;No&nbsp;
			{!! Form::hidden('user_id', '1') !!}
			{!! '<br>' !!}
			{!! Form::submit('Post') !!}
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
