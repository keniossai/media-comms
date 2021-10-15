<!DOCTYPE html>
<html lang="en">
	<!-- robert/  03:29:43 GMT -->
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />

		<link rel="shortcut icon" href="./images/favicon.png" />
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<link
			rel="apple-touch-icon"
			sizes="72x72"
			href="apple-touch-icon-72x72.png"
		/>
		<link
			rel="apple-touch-icon"
			sizes="114x114"
			href="apple-touch-icon-114x114.png"
		/>
		<title>Media Comms</title>

		<link
			href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i&amp;display=swap"
			rel="stylesheet"
		/>
		<link href="{{asset('css/style.css')}}" rel="stylesheet" media="screen" />
		
	</head>
	<body>
		<div class="animsition">
			<div class="loader">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>

			<div class="click-capture"></div>

			<div class="menu">
				<span class="close-menu icon-cross2 right-boxed"></span>
				<ul class="menu-list right-boxed">
					<li data-menuanchor="page1">
						<a href="#page1">Home</a>
					</li>
					<li data-menuanchor="page2">
						<a href="#page2">About</a>
					</li>
					<li data-menuanchor="page3">
						<a href="#page3">Who we are</a>
					</li>
					<li data-menuanchor="page4">
						<a href="#page4">Services</a>
					</li>
					<li data-menuanchor="page5">
						<a href="#page5">Our Approach</a>
					</li>
					<li data-menuanchor="page7">
						<a href="#page7">Contact</a>
					</li>
					<li>
						<a href="">Donate</a>
					</li>
				</ul>
				<div class="menu-footer right-boxed">
					<div class="social-list">
						<a href="#" class="icon ion-social-twitter"></a>
						<a href="#" class="icon ion-social-facebook"></a>
						<a href="#" class="icon ion-social-linkedin"></a>
						<a href="#" class="icon ion-social-instagram"></a>
					</div>
					<div class="copy"><a href="">MediaComms</a></div>
				</div>
			</div>

			<header class="navbar boxed">
				<div class="navbar-bg"></div>
				<a class="brand" href="#">
					<div class="brand-info">
						<img class="brand-img" alt="" src="images/mc-logo.png" />
					</div>
				</a>
					
				<a href="">
					<button
						type="button"
						class="icon-bar btn btn-2"
						>
						DONATE
					</button>
				</a>
				<button
					type="button"
					class="navbar-toggle"
					data-toggle="collapse"
					data-target="#navbar-collapse"
					aria-expanded="false"
				>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</header>


		@yield('content')




    <script
			data-cfasync="false"
			src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/wow.min.js')}}"></script>
		<script src="{{asset('js/smoothscroll.js')}}"></script>
		<script src="{{asset('js/animsition.js')}}"></script>
		<script src="{{asset('js/jquery.validate.min.js')}}"></script>
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/jquery.pagepiling.min.js')}}"></script>

		<script src="{{asset('js/scripts.js')}}"></script>
</body>


</html>
