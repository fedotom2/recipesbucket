<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="UTF-8">
		<title>{{ $title }}</title>
		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Styles -->
		@if($css != '')
		<link rel="stylesheet" href="{{ asset($css) }}">
		@endif
	</head>
	<body>
		@yield('content')
	</body>
</html>