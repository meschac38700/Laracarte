<!DOCTYPE html>
<html>
<head>
	<title> {{ App\Helpers\FormatString::formatTitle( $title ??  null ) }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="{{asset('/css/app.css')}}">
	@stack('scripts_header')
</head>
<body>
	@include('layouts.partials._nav')
	
	@yield('content')

	<footer class="text-center">
		@yield('footer')
		<p>&copy; {{ date('Y') }} · Laracarte by <a target="_blank" href="https://twitter.com/etsmo">@etsmo</a> - A <a target="_blank" href="https://laramap.com">Laramap</a> clone app.</p>
		<p><strong>This app has been built for learning purposes.</strong></p>
		
	</footer >
	@stack('scripts_footer')
	{{-- Jquery min => // == dynamique protocole http|https  --}}
	<script src="//code.jquery.com/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>