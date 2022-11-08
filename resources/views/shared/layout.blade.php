<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Example | @yield('title')</title>
		<link href="css/app.css" rel="stylesheet">
	</head>
	
	<body>
		@include('partials.header')
		
		@hasSection('plans')
				@yield('plans')
		@endif
		
		@include('partials.footer')
	</body>
</html>
