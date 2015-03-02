<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Du Lịch Sơn La</title>
		<script src="{{asset('../public/js/jquery-1.11.2.min.js')}}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="{{asset('../public/js/bootstrap.min.js')}}"></script>
		<!-- Bootstrap -->
	<link href="{{asset('../public/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('../public/css/style.css')}}">
</head>
<body>
	<div id="wrapper">
		<div class="container">
			<header>
				@include('header')
			</header><!-- End #header -->
			<div id="mainContent">
				<section id="section1">
					<div class="left-sidebar col-md-2 block alpha">
					 	@include('left-sidebar')
					</div>
					<div class="content col-md-6">
						<div class="block-top">
							@include('block-top')
						</div>
						<div class="populair block">
							 @yield('content')
						</div>
						<div class="right-sidebar col-md-4 omega">
							@include('right-sidebar')
						</div>
					</div>

				</section><!-- End section1-->
				<section id="section2">
				</section><!-- End section2-->
				<section id="section3">
					<div class="content-st3 col-md-12 alpha">
						<div class="box-st3">
							@include('alpha')	
						</div>
						
					</div>
				</section><!-- End section3-->
				<section id="section4">
				</section><!-- End section4-->
				<section id="section5">
					@include('images')
				</section><!-- End section5-->
				<div id="footer">
					@include('footer')
				</div>
			</div><!-- End #mainContent -->
		</div><!-- End .container -->
	</div><!-- End #wrapper -->
</body>
</html>