<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>ORARI Kabupaten Berau</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<link rel="stylesheet" href="{{ asset("bower_components/bootstrap/dist/css/bootstrap.min.css") }}" />
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset("bower_components/w2ui/w2ui-1.4.3.min.css") }}">  
    <link rel="stylesheet" type="text/css" href="{{ asset("bower_components/font-awesome/css/font-awesome.min.css") }}">   
   
</head>
<body>
	@yield('body')
 	<script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/w2ui/w2ui-1.4.3.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset("bower_components/bootstrap/dist/js/bootstrap.min.js") }}" />
	@stack('scripts')
</body>
</html>	