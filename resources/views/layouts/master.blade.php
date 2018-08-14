<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	@stack('scripts_header')
</head>
<body>
	
	@yield('content')

	<footer>
		@yield('footer')
	</footer>
	@stack('scripts_footer')
</body>
</html>