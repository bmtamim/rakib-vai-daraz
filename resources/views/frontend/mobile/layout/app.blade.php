<!DOCTYPE html>
@if(\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
	<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@else
		<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		@endif
		<head>

			<meta name="csrf-token" content="{{ csrf_token() }}">
			<meta name="app-url" content="{{ getBaseURL() }}">
			<meta name="file-base-url" content="{{ getFileBaseURL() }}">

			<title>@yield('meta_title', get_setting('website_name').' | '.get_setting('site_motto'))</title>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="robots" content="index, follow">
			<meta name="description" content="@yield('meta_description', get_setting('meta_description') )"/>
			<meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords') )">

		@yield('meta')

		@if(!isset($detailedProduct) && !isset($customer_product) && !isset($shop) && !isset($page) && !isset($blog))
			<!-- Schema.org markup for Google+ -->
				<meta itemprop="name" content="{{ get_setting('meta_title') }}">
				<meta itemprop="description" content="{{ get_setting('meta_description') }}">
				<meta itemprop="image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

				<!-- Twitter Card data -->
				<meta name="twitter:card" content="product">
				<meta name="twitter:site" content="@publisher_handle">
				<meta name="twitter:title" content="{{ get_setting('meta_title') }}">
				<meta name="twitter:description" content="{{ get_setting('meta_description') }}">
				<meta name="twitter:creator" content="@author_handle">
				<meta name="twitter:image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

				<!-- Open Graph data -->
				<meta property="og:title" content="{{ get_setting('meta_title') }}"/>
				<meta property="og:type" content="website"/>
				<meta property="og:url" content="{{ route('home') }}"/>
				<meta property="og:image" content="{{ uploaded_asset(get_setting('meta_image')) }}"/>
				<meta property="og:description" content="{{ get_setting('meta_description') }}"/>
				<meta property="og:site_name" content="{{ env('APP_NAME') }}"/>
				<meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
		@endif

		<!-- Favicon-->
			<link rel="icon" href="{{ asset('public/frontend/mobile/img/icons/icon-72x72.png') }}">
			<!-- Apple Touch Icon-->
			<link rel="apple-touch-icon" href="{{ asset('public/frontend/mobile/img/icons/icon-96x96.png') }}">
			<link rel="apple-touch-icon" sizes="152x152"
					href="{{ asset('public/frontend/mobile/img/icons/icon-152x152.png') }}">
			<link rel="apple-touch-icon" sizes="167x167"
					href="{{ asset('public/frontend/mobile/img/icons/icon-167x167.png') }}">
			<link rel="apple-touch-icon" sizes="180x180"
					href="{{ asset('public/frontend/mobile/img/icons/icon-180x180.png') }}">
			<!-- CSS Libraries-->
			<link rel="stylesheet" href="{{ asset('public/frontend/mobile/css/bootstrap.min.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/mobile/css/animate.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/mobile/css/owl.carousel.min.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/mobile/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/mobile/css/default/lineicons.min.css') }}">
			<!-- Stylesheet-->
			<link rel="stylesheet" href="{{ asset('public/frontend/mobile/css/style.css') }}">

		</head>
		<body>
		<!-- Preloader-->
		<div class="preloader" id="preloader">
			<div class="spinner-grow text-secondary" role="status">
				<div class="sr-only">Loading...</div>
			</div>
		</div>
		<!-- Header Area-->
		@include('frontend.mobile.layout.partials.header')
		<!-- Sidenav Black Overlay-->
		<div class="sidenav-black-overlay"></div>
		<!-- Side Nav Wrapper-->
		<div class="suha-sidenav-wrapper" id="sidenavWrapper">
			<!-- Sidenav Profile-->
			<div class="sidenav-profile">
				<div class="user-profile"><img src="{{ asset('public/frontend/mobile/img/bg-img/9.jpg') }}" alt=""></div>
				<div class="user-info">
					<h6 class="user-name mb-0">Suha Sarah</h6>
					<p class="available-balance">Credit <span>$<span class="counter">461</span></span></p>
				</div>
			</div>
			<!-- Sidenav Nav-->
			<ul class="sidenav-nav ps-0">
				<li><a href="profile.html"><i class="lni lni-user"></i>My Profile</a></li>

				<li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="lni lni-heart"></i>My Wishlist</a>
					<ul>
						<li><a href="wishlist-grid.html">- Wishlist Grid</a></li>
						<li><a href="wishlist-list.html">- Wishlist List</a></li>
					</ul>
				</li>
				<li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
				@auth()
					<li><a href="intro.html"><i class="lni lni-power-switch"></i>Sign Out</a></li>
				@else
					<li><a href="{{ route('user.login') }}"><i class="lni lni-power-switch"></i>Sign In</a></li>
				@endauth

			</ul>
			<!-- Go Back Button-->
			<div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
		</div>
		<!-- PWA Install Alert-->
		<div class="toast pwa-install-alert shadow bg-white" role="alert" aria-live="assertive" aria-atomic="true"
			  data-bs-delay="5000" data-bs-autohide="true">
			<div class="toast-body">
				<div class="content d-flex align-items-center mb-2"><img
						 src="{{ asset('public/frontend/mobile/img/icons/icon-72x72.png') }}" alt="">
					<h6 class="mb-0">Add to Home Screen</h6>
					<button class="btn-close ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<span class="mb-0 d-block">Add Suha on your mobile home screen. Click the<strong class="mx-1">"Add to Home Screen"</strong>button &amp; enjoy it like a regular app.</span>
			</div>
		</div>
		@section('content')
		@show
		<!-- Internet Connection Status-->
		<div class="internet-connection-status" id="internetStatus"></div>
		<!-- Footer Nav-->
		<div class="footer-nav-area" id="footerNav">
			<div class="container h-100 px-0">
				<div class="suha-footer-nav h-100">
					<ul class="h-100 d-flex align-items-center justify-content-between ps-0">
						<li class="active"><a href="home.html"><i class="lni lni-home"></i>Home</a></li>
						<li><a href="message.html"><i class="lni lni-life-ring"></i>Support</a></li>
						<li><a href="cart.html"><i class="lni lni-shopping-basket"></i>Cart</a></li>
						<li><a href="pages.html"><i class="lni lni-heart"></i>Pages</a></li>
						<li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
					</ul>
				</div>
			</div>
		</div>

		<script src="{{ asset('public/frontend/mobile/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/js/jquery.min.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/js/waypoints.min.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/js/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/s/jquery.counterup.min.js') }}j"></script>
		<script src="{{ asset('public/frontend/mobile/js/jquery.countdown.min.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/js/default/jquery.passwordstrength.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/js/default/dark-mode-switch.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/js/default/no-internet.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/js/default/active.js') }}"></script>
		<script src="{{ asset('public/frontend/mobile/js/pwa.js') }}"></script>
		</body>
		</html>
