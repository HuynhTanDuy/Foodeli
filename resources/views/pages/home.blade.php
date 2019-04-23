@extends('layout.index')
@section('content')
@include('layout.slider')

<!-- Instruction Area -->
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
<!-- End Instruction Area -->
			

<!--  Ship Menu -->
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
															<a href="location/{{$loca->id}}">
																<img width="100px" height="100px" src={{$loca->avatar}} alt="product images"> 
															</a>
														</div>
														<div class="food__menu__details">
															<div class="fd__menu__title__prize">
																<h4><a href="location/{{$loca->id}}">{{$loca->name}}</a></h4>
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
<!-- End Ship Menu Area -->

<!--  Reserve Menu -->
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
<!-- End Reserve Menu Area -->
			

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

<!-- Start News Area -->
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
<!-- End News Area -->

<!--  Subscribe Area -->
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
@endsection