<!doctype html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Foodeli || Food Delivery </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicons -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/icon.png">
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/plugins.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet"  href="customstyle.css">
		
		<!-- Custom css -->
		<link rel="stylesheet" href="css/custom.css">
		<!-- Modernizer js -->
		
		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	</head>
	<body>
		<!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->
		<!-- Add your site or application content here -->
		
		<!-- <div class="fakeloader"></div> -->
		<!-- Main wrapper -->
		<div class="wrapper" id="wrapper">
			<!-- Start Header Area -->
			@include('layout.header')
			<!-- End Header Area -->
			<!-- Start Slider Area -->
			@include('layout.slider')
			<!-- End Slider Area -->
			<!-- Start Service Area -->
			<section class="fd__service__area bg-image--2 section-padding--xlg">
				<div class="container">
					<div class="service__wrapper bg--white">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="section__title service__align--left">
									
									<h2 class="title__line">Đặt thức ăn dễ dàng hơn với Foodeli</h2>
								</div>
							</div>
						</div>
						<div class="row mt--30">
							<!-- Start Single Service -->
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="service">
									<div class="service__title">
										<div class="ser__icon">
											<img src="images/icon/color-icon/1.png" alt="icon image">
										</div>
										<h2><a href="service.html">Lựa chọn quán ăn</a></h2>
									</div>
									<div class="service__details">
										<p>Lựa chọn quán ăn để xem menu của quán</p>
									</div>
								</div>
							</div>
							<!-- End Single Service -->
							<!-- Start Single Service -->
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="service">
									<div class="service__title">
										<div class="ser__icon">
											<img src="images/icon/color-icon/2.png" alt="icon image">
										</div>
										<h2><a href="service.html">Lựa chọn món ăn</a></h2>
									</div>
									<div class="service__details">
										<p>Chọn món ăn yêu thích</p>
									</div>
								</div>
							</div>
							<!-- End Single Service -->
							<!-- Start Single Service -->
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="service">
									<div class="service__title">
										<div class="ser__icon">
											<img src="images/icon/color-icon/3.png" alt="icon image">
										</div>
										<h2><a href="service.html">Xác nhận đơn hàng</a></h2>
									</div>
									<div class="service__details">
										<p>Xác nhận món ăn và thanh toán bằng tiền mặt, thẻ tín dụng, Paypal,...</p>
									</div>
								</div>
							</div>
							<!-- End Single Service -->
						</div>
					</div>
				</div>
			</section>
			<!-- End Service Area -->
			<!-- Start Food Category -->
			
			<!-- End Food Category -->

			<!-- Start SHip Menu -->
			<section class="fd__special__menu__area bg-image--3 section-pt--lg">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="section__title service__align--left">
								<p>Đặt món ăn </p>
								<h2 class="title__line">Giao tận nơi với menu phong phú</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="special__food__menu mt--80">
					<div class="food__menu__prl bg-image--4">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="food__nav nav nav-tabs" role="tablist">
										<a class="active"  id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
										@foreach ($category as $cate)
										<?php $tenkhongdau=changeTitle($cate->name); ?>
										<a id="nav-{{$cate->name}}-tab" data-toggle="tab" href="#nav-{{$tenkhongdau}}" role="tab">{{$cate->name}}</a>
										@endforeach
										
									</div>
									<div class="fd__tab__content tab-content" id="nav-tabContent">
										<!-- Start Single tab -->

										<div class="single__tab__panel tab-pane fade show active " id="nav-all" role="tabpanel">

													
											<div class="tab__content__wrap" >
												
												<!-- Start Single Tab Content -->
												<div class="single__tab__content">
													<div class="row">
														<?php $j=0; ?>
													@foreach ($location as $loca)
													
													<div class="col-md-5 @if ( $j==1 ) offset-md-2 @endif">
													<!-- Start Single Food -->
													<div class="food__menu">
														<div class="food__menu__thumb">
															<a href="menu-details.html">
																<img width="100px" height="100px" src={{$loca->avatar}} alt="product images"> 
															</a>
														</div>
														<div class="food__menu__details">
															<div class="fd__menu__title__prize">
																<h4><a href="menu-details.html">{{$loca->name}}</a></h4>
																<span class="menu__prize">$15 </span>
															</div>
															<div class="fd__menu__details">
																<p>Địa chỉ: {{$loca->address}}</p>
																<div class="delivery__time__rating">
																	<p> Phí ship : {{$loca->shipCharge}}</p>
																	<ul class="fd__rating">
																		<?php $i=0; ?>
																		<?php for ($i=0; $i < $loca->points; $i++) { ?>
																		<li><i class="zmdi zmdi-star"></i></li>
																		<?php  }  ?>
																		
																		
																		
																		
																		<li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													</div>
													 <?php $j++; ?> 
													<!-- End Single Food -->
													@endforeach
												
												
											</div>
										</div>
												<!-- End Single Tab Content -->
												<!-- Start Single Tab Content -->
												
											</div>
										</div>
										<!-- End Single tab -->
										<!-- Start Single tab -->
										
										@foreach ($category as $cate)
										<?php $tenkhongdau=changeTitle($cate->name); ?>
										
										
										<div class="single__tab__panel tab-pane fade" id="nav-{{$tenkhongdau}}" role="tabpanel">
											<div class="tab__content__wrap">
												<!-- Start Single Tab Content -->
												<div class="single__tab__content">
													<!-- Start Single Food -->
													@foreach ($cate->getLocation as $loca)
													<div class="food__menu">
														<div class="food__menu__thumb">
															<a href="menu-details.html">
																<img width="100px" height="100px" src={{$loca->avatar}} alt="product images">
															</a>
														</div>
														<div class="food__menu__details">
															<div class="fd__menu__title__prize">
																<h4><a href="menu-details.html">{{$loca->name}}</a></h4>
																<span class="menu__prize">$22</span>
															</div>
															<div class="fd__menu__details">
																<p>Địa chỉ : {{$loca->address}}</p>
																<div class="delivery__time__rating">
																	<p>Phí ship : {{$loca->shipCharge}}</p>
																	<ul class="fd__rating">
																		<?php $i=0; ?>
																		<?php for ($i=0; $i < $loca->points; $i++) { ?>
																		<li><i class="zmdi zmdi-star"></i></li>
																		<?php  }  ?>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<!-- End Single Food -->
													@endforeach
													
												</div>
												<!-- End Single Tab Content -->
												
											</div>
										</div>
									</div>
								</div>
							</div>
										<!-- End Single tab -->
										@endforeach
										
										
									</div>
								</div>
							</div>
						
			</section>
			<!-- End Ship Menu -->



			<!-- Start Reserve Menu -->
			<section class="fd__special__menu__area bg-image--3 section-pt--lg">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="section__title service__align--left">
								<p>Đặt bàn </p>
								<h2 class="title__line">Đặt chỗ với giá ưu đãi</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="special__food__menu mt--80">
					<div class="food__menu__prl bg-image--4">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									
									<div class="fd__tab__content tab-content" id="nav-tabContent">
										<!-- Start Single tab -->

										<div class="single__tab__panel tab-pane fade show active " id="nav-all" role="tabpanel">

													
											<div class="tab__content__wrap" >
												
												<!-- Start Single Tab Content -->
												<div class="single__tab__content">
													<div class="row">
														<?php $j=0; ?>
													@foreach ($location_reserve as $loca)
													
													<div class="col-md-5 @if ( $j==1 ) offset-md-1 @endif">
													<!-- Start Single Food -->
													<div class="food__menu">
														<div class="food__menu__thumb">
															<a href="menu-details.html">
																<img width="100px" height="100px" src={{$loca->avatar}} alt="product images"> 
															</a>
														</div>
														<div class="food__menu__details">
															<div class="fd__menu__title__prize">
																<h4><a href="menu-details.html">{{$loca->name}}</a></h4>
																<span class="menu__prize">$15 </span>
															</div>
															<div class="fd__menu__details">
																<p>Địa chỉ: {{$loca->address}}</p>
																<div class="delivery__time__rating">
																	<p> Phí ship : {{$loca->shipCharge}}</p>
																	<ul class="fd__rating">
																		<?php $i=0; ?>
																		<?php for ($i=0; $i < $loca->points; $i++) { ?>
																			 <li><i class="zmdi zmdi-star"></i></li>
																		<?php  }  ?>	 														
																	
																		
																		
																	
																		<li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													</div>
													 <?php $j++; ?> 
													<!-- End Single Food -->
													@endforeach
												
												
											</div>
										</div>
												<!-- End Single Tab Content -->
												<!-- Start Single Tab Content -->
												
											</div>
										</div>
										<!-- End Single tab -->
										<!-- Start Single tab -->
										
										@foreach ($category as $cate)
										<?php $tenkhongdau=changeTitle($cate->name); ?>
										
										
										<div class="single__tab__panel tab-pane fade" id="nav-{{$tenkhongdau}}" role="tabpanel">
											<div class="tab__content__wrap">
												<!-- Start Single Tab Content -->
												<div class="single__tab__content">
													<!-- Start Single Food -->
													@foreach ($cate->getLocation as $loca)
													<div class="food__menu">
														<div class="food__menu__thumb">
															<a href="menu-details.html">
																<img width="100px" height="100px" src={{$loca->avatar}} alt="product images">
															</a>
														</div>
														<div class="food__menu__details">
															<div class="fd__menu__title__prize">
																<h4><a href="menu-details.html">{{$loca->name}}</a></h4>
																<span class="menu__prize">$22</span>
															</div>
															<div class="fd__menu__details">
																<p>Địa chỉ : {{$loca->address}}</p>
																<div class="delivery__time__rating">
																	<p>Phí ship : {{$loca->shipCharge}}</p>
																	<ul class="fd__rating">
																		<?php $i=0; ?>
																		<?php for ($i=0; $i < $loca->points; $i++) { ?>
																			 <li><i class="zmdi zmdi-star"></i></li>
																		<?php  }  ?>	 	
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<!-- End Single Food -->
													@endforeach
													
												</div>
												<!-- End Single Tab Content -->
												
											</div>
										</div>
									</div>
								</div>
							</div>
										<!-- End Single tab -->
										@endforeach
										
										
									</div>
								</div>
							</div>
						
			</section>
			<!-- End Reserve Menu -->

			<!-- Start Download App Area -->
			<section class="food__download__app__area section-padding--lg bg--white bg__shape--1">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="section__title service__align--left">
								<p>the process of our service </p>
								<h2 class="title__line">Download our app</h2>
							</div>
						</div>
					</div>
					<div class="row mt--80">
						<div class="col-lg-12 poss--relative">
							<div class="app__download__container">
								<div class="app__download__inner inline__image__css--1" style="background-image: url(images/app/bg.png);">
									<h2>Aahar now in your hand</h2>
									<h6>Download! to get this app Faster way to order food</h6>
								</div>
								<ul class="dwn__app__list">
									<li class="wow lightSpeedIn" data-wow-delay="0.2s"><a href="#"><img src="images/app/2.png" alt="app images"></a></li>
									<li class="wow lightSpeedIn" data-wow-delay="0.3s"><a href="#"><img src="images/app/3.png" alt="app images"></a></li>
								</ul>
							</div>
							<div class="app__phone wow fadeInLeft" data-wow-delay="0.2s">
								<img src="images/app/1.png" alt="app images">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Download App Area -->
			<!-- Start Testimonail Area -->
			<section class="fd__testimonial__area section-padding--lg bg-image--5">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
							<div class="testimonial__activation--1 text-center bg--white owl-carousel owl-theme clearfix">
								<!-- Start Single Testimonial -->
								<div class="testimonial">
									<div class="testimonial__thumb">
										<img src="images/testimonial/clint/1.png" alt="testimonial images">
									</div>
									<div class="testimonial__details">
										<h4>Mily Cyrus</h4>
										<h6>Food Expert</h6>
										<p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
									</div>
								</div>
								<!-- End Single Testimonial -->
								<!-- Start Single Testimonial -->
								<div class="testimonial">
									<div class="testimonial__thumb">
										<img src="images/testimonial/clint/1.png" alt="testimonial images">
									</div>
									<div class="testimonial__details">
										<h4>Mily Cyrus</h4>
										<h6>Food Expert</h6>
										<p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
									</div>
								</div>
								<!-- End Single Testimonial -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Testimonail Area -->
			<!-- Start Blog Area -->
			<section class="fb__blog__ara section-padding--lg bg--white">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="section__title service__align--left">
								
								<h2 class="title__line">Tin tức</h2>
							</div>
						</div>
					</div>
					<div class="row mt--40">
						<!-- Start Single Blog -->
						@foreach($news as $n)
						<div class="col-md-6 col-lg-4 col-sm-12 foo">
							
							<div class="blog">
								<div class="blog__thumb">
									<a href="news/{{$n->titlenosign}}/{{$n->id}}">
										<img style="height:300px;"src="images/news/{{$n->images}}" alt="blog images">
									</a>
								</div>
								<div class="blog__details">
									<h2><a href="news/{{$n->titlenosign}}/{{$n->id}}">{{$n->tittle}}</a></h2>
									<span>1st Feb, 2o17</span>
									<p>{{$n->summary}}</p>
									<div class="blog__btn">
										<a class="food__btn btn--green theme--hover" href="news/{{$n->titlenosign}}/{{$n->id}}">Chi tiết</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<!-- Start Single Blog -->
						<!-- Start Single Blog -->
						
						<!-- Start Single Blog -->
						
					</div>
				</div>
			</section>
			<!-- End Blog Area -->
			<!-- Start Subscribe Area -->
			<section class="fd__subscribe__area bg-image--6">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="subscribe__inner">
								<h2>Subscribe to our newsletter</h2>
								<div id="mc_embed_signup">
									<div id="enter__email__address">
										<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
											<div id="mc_embed_signup_scroll" class="htc__news__inner">
												<div class="news__input">
													<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail Address" required>
												</div>
												<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
												<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
												<div class="clearfix subscribe__btn"><input type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe" class="sign__up food__btn">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Subscribe Area -->
		<!-- Start Footer Area -->
		@include('layout.footer')
		<!-- End Footer Area -->
		<!-- Login Form -->
		<div class="accountbox-wrapper">
			<div class="accountbox text-left">
				<ul class="nav accountbox__filters" id="myTab" role="tablist">
					<li>
						<a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
					</li>
					<li>
						<a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
					</li>
				</ul>
				<div class="accountbox__inner tab-content" id="myTabContent">
					<div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
						<form action="#">
							<div class="single-input">
								<input class="cr-round--lg" type="text" placeholder="User name or email">
							</div>
							<div class="single-input">
								<input class="cr-round--lg" type="password" placeholder="Password">
							</div>
							<div class="single-input">
								<button type="submit" class="food__btn"><span>Go</span></button>
							</div>
							<div class="accountbox-login__others">
								<h6>Or login with</h6>
								<div class="social-icons">
									<ul>
										<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
										<li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
					<div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<form action="#">
							<div class="single-input">
								<input class="cr-round--lg" type="text" placeholder="User name">
							</div>
							<div class="single-input">
								<input class="cr-round--lg" type="email" placeholder="Email address">
							</div>
							<div class="single-input">
								<input class="cr-round--lg" type="password" placeholder="Password">
							</div>
							<div class="single-input">
								<input class="cr-round--lg" type="password" placeholder="Confirm password">
							</div>
							<div class="single-input">
								<button type="submit" class="food__btn"><span>Sign Up</span></button>
							</div>
						</form>
					</div>
					<span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
				</div>
			</div>
			</div><!-- //Login Form -->
			<!-- Cartbox -->
			<div class="cartbox-wrap">
				<div class="cartbox text-right">
					<button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
					<div class="cartbox__inner text-left">
						<div class="cartbox__items">
							<!-- Cartbox Single Item -->
							<div class="cartbox__item">
								<div class="cartbox__item__thumb">
									<a href="product-details.html">
										<img src="images/blog/sm-img/1.jpg" alt="small thumbnail">
									</a>
								</div>
								<div class="cartbox__item__content">
									<h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
									<p>Qty: <span>01</span></p>
									<span class="price">$15</span>
								</div>
								<button class="cartbox__item__remove">
								<i class="fa fa-trash"></i>
								</button>
								</div><!-- //Cartbox Single Item -->
								<!-- Cartbox Single Item -->
								<div class="cartbox__item">
									<div class="cartbox__item__thumb">
										<a href="product-details.html">
											<img src="images/blog/sm-img/2.jpg" alt="small thumbnail">
										</a>
									</div>
									<div class="cartbox__item__content">
										<h5><a href="product-details.html" class="product-name">Wheat Bread</a></h5>
										<p>Qty: <span>01</span></p>
										<span class="price">$25</span>
									</div>
									<button class="cartbox__item__remove">
									<i class="fa fa-trash"></i>
									</button>
									</div><!-- //Cartbox Single Item -->
									<!-- Cartbox Single Item -->
									<div class="cartbox__item">
										<div class="cartbox__item__thumb">
											<a href="product-details.html">
												<img src="images/blog/sm-img/3.jpg" alt="small thumbnail">
											</a>
										</div>
										<div class="cartbox__item__content">
											<h5><a href="product-details.html" class="product-name">Mixed Fruits Pie</a></h5>
											<p>Qty: <span>01</span></p>
											<span class="price">$30</span>
										</div>
										<button class="cartbox__item__remove">
										<i class="fa fa-trash"></i>
										</button>
										</div><!-- //Cartbox Single Item -->
									</div>
									<div class="cartbox__total">
										<ul>
											<li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
											<li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
											<li class="grandtotal">Total<span class="price">$75</span></li>
										</ul>
									</div>
									<div class="cartbox__buttons">
										<a class="food__btn" href="cart.html"><span>View cart</span></a>
										<a class="food__btn" href="checkout.html"><span>Checkout</span></a>
									</div>
								</div>
							</div>
							</div><!-- //Cartbox -->
							</div><!-- //Main wrapper -->
							<!-- JS Files -->
							<script
							src="https://code.jquery.com/jquery-3.3.1.js"
							integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
							crossorigin="anonymous">
							</script>
							<script src="js/vendor/jquery-3.2.1.min.js"></script>
							<script src="js/popper.min.js"></script>
							<script src="js/bootstrap.min.js"></script>
							<script src="js/plugins.js"></script>
							<script src="js/active.js"></script>
							
						</body>
					</html>