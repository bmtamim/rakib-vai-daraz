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

			<title>@yield('title', get_setting('website_name').' | '.get_setting('site_motto'))</title>

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
		<!-- Favicon -->
			<link rel="shortcut icon" type="image/x-icon"
					href="{{ asset('public/frontend/desktop/images/icons/icon_logo.png') }}">
			<!-- Place favicon.ico in the root directory -->

			<link rel="stylesheet" href="{{ asset('public/frontend/desktop/css/bootstrap.min.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/desktop/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/desktop/css/ionicons.min.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/desktop/css/css-plugins-call.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/desktop/css/bundle.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/desktop/css/main.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/desktop/css/responsive.css') }}">
			<link rel="stylesheet" href="{{ asset('public/frontend/desktop/css/colors.css') }}">
		</head>
		<body>

		<!-- Body main wrapper start -->
		<div class="wrapper home-one">
		@include('frontend.desktop.layouts.partials.header')
		@include('frontend.desktop.layouts.partials.slider')
		@section('content')
		@show
		@include('frontend.desktop.layouts.partials.footer')
		<!-- QUICKVIEW PRODUCT START -->
			<div id="quickview-wrapper">
				<!-- Modal -->
				<div class="modal fade" id="product_modal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-close-btn">
								<button class="close" data-dismiss="modal">
									<i class="fa fa-times"></i>
								</button>
							</div>
							<div class="modal-body">
								<!-- Single product area -->
								<div class="single-product-area">
									<div class="container-fullwidth">
										<div class="single-product-wrapper">
											<div class="row">
												<div class="col-xs-12 col-md-7 col-lg-7">
													<div class="product-details-img-content">
														<div class="product-details-tab mr-40">
															<div class="product-details-large tab-content">
																<div class="tab-pane active" id="pro-details1">
																	<div class="product-pop">
																		<a href="#">
																			<img src="images/product/single/product4.jpg" alt="">
																		</a>
																	</div>
																</div>
																<div class="tab-pane" id="pro-details2">
																	<div class="product-pop">
																		<a href="#">
																			<img src="images/product/single/product5.jpg" alt="">
																		</a>
																	</div>
																</div>
																<div class="tab-pane" id="pro-details3">
																	<div class="product-pop">
																		<a href="#">
																			<img src="images/product/single/product6.jpg" alt="">
																		</a>
																	</div>
																</div>
																<div class="tab-pane" id="pro-details4">
																	<div class="product-pop">
																		<a href="#">
																			<img src="images/product/single/product7.jpg" alt="">
																		</a>
																	</div>
																</div>
																<div class="tab-pane" id="pro-details5">
																	<div class="product-pop">
																		<a href="#">
																			<img src="images/product/single/product8.jpg" alt="">
																		</a>
																	</div>
																</div>
															</div>
															<div class="product-details-small nav product-dec-slider-qui owl-carousel">
																<a class="active" href="#pro-details1">
																	<img src="images/product/thumbnails/product4.jpg" alt="">
																</a>
																<a href="#pro-details2">
																	<img src="images/product/thumbnails/product5.jpg" alt="">
																</a>
																<a href="#pro-details3">
																	<img src="images/product/thumbnails/product6.jpg" alt="">
																</a>
																<a href="#pro-details4">
																	<img src="images/product/thumbnails/product7.jpg" alt="">
																</a>
																<a href="#pro-details5">
																	<img src="images/product/thumbnails/product8.jpg" alt="">
																</a>
																<a class="active" href="#pro-details1">
																	<img src="images/product/thumbnails/product4.jpg" alt="">
																</a>
																<a href="#pro-details2">
																	<img src="images/product/thumbnails/product5.jpg" alt="">
																</a>
																<a href="#pro-details3">
																	<img src="images/product/thumbnails/product6.jpg" alt="">
																</a>
																<a href="#pro-details4">
																	<img src="images/product/thumbnails/product7.jpg" alt="">
																</a>
																<a href="#pro-details5">
																	<img src="images/product/thumbnails/product8.jpg" alt="">
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-md-5 col-lg-5">
													<div class="single-product-info">
														<h1>Sit voluptatem</h1>
														<div class="product-rattings">
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star-half-o"></i></span>
															<span><i class="fa fa-star-o"></i></span>
														</div>
														<span class="price">
                                                        <del>৳ 77.00</del> ৳ 66.00
                                                    </span>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
															tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
															veniam, quis nostrud exercitation ullamco,Proin lectus ipsum,
															gravida et mattis vulputate, tristique ut lectus
														</p>
														<div class="box-quantity d-flex">
															<form action="#">
																<input class="quantity mr-40" min="1" value="1" type="number">
															</form>
															<a class="add-cart" href="cart.html">add to cart</a>
														</div>
														<div class="wishlist-compear-area">
															<a href="wishlist.html"><i class="ion-ios-heart-outline"></i>
																Add to Wishlist</a>
															<a href="#"><i class="ion-ios-loop-strong"></i> Compare</a>
														</div>
														<div class="product_meta">
                                                        <span class="posted_in">Categories: <a href="#"
																															  rel="tag">Accessories</a>, <a
																					href="#"
																					rel="tag">Clothings</a></span>
														</div>
														<div class="single-product-sharing">
															<div class="widget widget_socialsharing_widget">
																<h3 class="widget-title">Share this product</h3>
																<ul class="social-icons">
																	<li><a class="facebook social-icon" href="#"><i
																				 class="fa fa-facebook"></i></a></li>
																	<li><a class="twitter social-icon" href="#"><i
																				 class="fa fa-twitter"></i></a></li>
																	<li><a class="pinterest social-icon" href="#"><i
																				 class="fa fa-pinterest"></i></a></li>
																	<li><a class="gplus social-icon" href="#"><i
																				 class="fa fa-google-plus"></i></a></li>
																	<li><a class="linkedin social-icon" href="#"><i
																				 class="fa fa-linkedin"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Single product area end -->
							</div>
						</div>
						<!-- .modal-content -->
					</div>
					<!-- .modal-dialog -->
				</div>
				<!-- END Modal -->
			</div>
			<!-- QUICKVIEW PRODUCT END -->
		</div>
		<!-- Body main wrapper end -->

		<!-- jQuery CDN -->
		<script src="{{ asset('public/frontend/desktop/js/jquery-1.12.4.min.js') }}"></script>
		<!-- Popper min js -->
		<script src="{{ asset('public/frontend/desktop/js/popper.min.js') }}"></script>
		<!-- Bootstrap min js  -->
		<script src="{{ asset('public/frontend/desktop/js/bootstrap.min.js') }}"></script>
		<!-- nivo slider pack js  -->
		<script src="{{ asset('public/frontend/desktop/js/jquery.nivo.slider.pack.js') }}"></script>
		<!-- All plugins here -->
		<script src="{{ asset('public/frontend/desktop/js/plugins.js') }}"></script>
		<!-- Main js  -->
		<script src="{{ asset('public/frontend/desktop/js/main.js') }}"></script>


		<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
		<script>
          window.ga = function () {
              ga.q.push(arguments)
          };
          ga.q = [];
          ga.l = +new Date;
          ga('create', 'UA-XXXXX-Y', 'auto');
          ga('send', 'pageview')
		</script>
		</body>
		</html>
