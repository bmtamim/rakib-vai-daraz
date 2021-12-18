@extends('frontend.desktop.layouts.app')

@section('title','Home')

@section('content')
	<!-- Best sellers -->
	<div class="product-area mt-4">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="section-title">
						<h3>Best Sellers</h3>
					</div>
				</div>
			</div>
			<div class="product-area-inner">
				<div class="row">
					<div class="product-carousel-active-2 owl-carousel">
						@foreach($best_selling_products as $product)
							<div class="col-sm-12">
								<div class="single-product-area">
									<div class="product-wrapper gridview">
										<div class="list-col4">
											<div class="product-image">
												<a href="#">
													<img src="{{ uploaded_asset($product->thumbnail_img) }}" alt="">
												</a>
												<div class="quickviewbtn">
													<a href="#" data-toggle="modal" data-target="#product_modal"
														data-original-title="Quick View"><i class="ion-eye"></i></a>
												</div>
											</div>
										</div>
										<div class="list-col8">
											<div class="product-info">
												<h2><a href="single-product.html">{{ $product->name ?? '' }}</a></h2>
												<span class="price">
                                                    ৳ 80.00
                                                </span>
											</div>
											<div class="product-hidden">
												<div class="add-to-cart">
													<a href="cart.html">Add to cart</a>
												</div>
												<div class="star-actions">
													<div class="product-rattings">
														<span><i class="fa fa-star"></i></span>
														<span><i class="fa fa-star"></i></span>
														<span><i class="fa fa-star"></i></span>
														<span><i class="fa fa-star-half-o"></i></span>
														<span><i class="fa fa-star-o"></i></span>
													</div>
													<ul class="actions">
														<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
														</li>
														<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Best sellers end -->
	<!-- Home fullwidth banner -->
	<div class="home-fullwidth-banner-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<a href="#">
						<img src="images/banner/home1-banner3.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Home fullwidth banner end -->
	<!-- Best sellers -->
	<div class="product-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="section-title">
						<h3>New Arrivals</h3>
					</div>
				</div>
			</div>
			<div class="product-area-inner">
				<div class="row">
					<div class="product-carousel-active-3 owl-carousel">
						<div class="col-sm-12">

							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/1.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Sit voluptatem</a></h2>
											<span class="price">
                                                    <del>৳ 77.00</del> ৳ 66.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/2.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Nulla sed libero</a></h2>
											<span class="price">
                                                    ৳ 45.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-sm-12">

							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/3.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Pellentesque posuere</a></h2>
											<span class="price">
                                                    ৳ 100.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/4.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Tincidunt malesuada</a></h2>
											<span class="price">
                                                    <del>৳ 80.00</del> ৳ 50.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-sm-12">

							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/5.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Pellentesque posuere</a></h2>
											<span class="price">
                                                    ৳ 45.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/6.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Kaoreet lobortis</a></h2>
											<span class="price">
                                                    ৳ 95.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-sm-12">

							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/7.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Aliquam lobortis est</a></h2>
											<span class="price">
                                                    ৳ 80.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<span class="onsale">Sale!</span>
												<img src="images/product/8.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Sit voluptatem</a></h2>
											<span class="price">
                                                    <del>৳ 77.00</del> ৳ 66.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-sm-12">

							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/9.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Phasellus vel hendrerit</a></h2>
											<span class="price">
                                                    ৳ 55.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/10.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Auctor gravida enim</a></h2>
											<span class="price">
                                                    <del>৳ 85.00</del> ৳ 75.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-sm-12">

							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/11.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Sit voluptatem</a></h2>
											<span class="price">
                                                    <del>৳ 77.00</del> ৳ 66.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/12.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Sit voluptatem</a></h2>
											<span class="price">
                                                    <del>৳ 77.00</del> ৳ 66.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-sm-12">

							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/13.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Sit voluptatem</a></h2>
											<span class="price">
                                                    <del>৳ 77.00</del> ৳ 66.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<span class="onsale">Sale!</span>
												<img src="images/product/1.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Sit voluptatem</a></h2>
											<span class="price">
                                                    <del>৳ 77.00</del> ৳ 66.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-sm-12">

							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/2.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Sit voluptatem</a></h2>
											<span class="price">
                                                    <del>৳ 77.00</del> ৳ 66.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="single-product-area">
								<div class="product-wrapper gridview">
									<div class="list-col4">
										<div class="product-image">
											<a href="#">
												<img src="images/product/3.jpg" alt="">
											</a>
											<div class="quickviewbtn">
												<a href="#" data-toggle="modal" data-target="#product_modal"
													data-original-title="Quick View"><i class="ion-eye"></i></a>
											</div>
										</div>
									</div>
									<div class="list-col8">
										<div class="product-info">
											<h2><a href="single-product.html">Sit voluptatem</a></h2>
											<span class="price">
                                                    <del>৳ 77.00</del> ৳ 66.00
                                                </span>
										</div>
										<div class="product-hidden">
											<div class="add-to-cart">
												<a href="cart.html">Add to cart</a>
											</div>
											<div class="star-actions">
												<div class="product-rattings">
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star-half-o"></i></span>
													<span><i class="fa fa-star-o"></i></span>
												</div>
												<ul class="actions">
													<li><a href="#"><i class="ion-android-favorite-outline"></i></a>
													</li>
													<li><a href="#"><i class="ionicons ion-android-person"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brand logo area -->
	<div class="brand-logo-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="brand-carousel-active owl-carousel">
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand1.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand2.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand3.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand4.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand5.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand6.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand7.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand8.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand9.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
						<!-- single brand logo -->
						<div class="brand-logo">
							<a href="#"><img src="images/brand/brand1.jpg" alt="Brand logo"></a>
						</div>
						<!-- single brand logo end -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
