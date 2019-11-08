<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>OnlineShopping</title>
	<link rel="stylesheet" type="text/css" href="{{asset('http://kenwheeler.github.io/slick/slick/slick.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('http://kenwheeler.github.io/slick/slick/slick-theme.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-3.3.6-dist/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('styles.css')}}">

</head>
<body>
	@yield('content')
	<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('//code.jquery.com/jquery-migrate-1.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('//cdn.js')}}delivr.net/jquery.slick/1.6.0/slick.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap-3.3.6-dist/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('main.js')}}"></script>
</body>

<div class="foot">
	<footer>
		<p> Brought To You By <a href="{{asset('https://code-projects.org/">Code-Projects</a></p>
	</footer>
</div>
<style>
	.foot {
		text-align: center;
	}
</style>

</html>