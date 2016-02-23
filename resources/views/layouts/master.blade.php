<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Posts - @yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/creative.css') }}" type="text/css">
</head>
<body id="page-top">
	@include('layouts.partials.navigation')
	@yield('content')
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('js/jquery.fittext.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script src="{{ asset('js/creative.js') }}"></script>
</body>
</html>
