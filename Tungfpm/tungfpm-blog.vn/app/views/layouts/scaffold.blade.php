<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="{{ URL::to('/assets/css/bootstrap-combined.min.css')}}" rel="stylesheet">
		<style>
			table form { margin-bottom: 0; }
			form ul { margin-left: 0; list-style: none; }
			.error { color: red; font-style: italic; }
			body { padding-top: 20px; }
		</style>
		<link rel="icon" href="{{ URL::to('/assets/images/heart.png')}}">
		<title>@yield('title')</title>
	</head>

	<body>

		<div class="container">
			@if (Session::has('message'))
				<div class="flash alert">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif

			@yield('main')
		</div>

	</body>

</html>