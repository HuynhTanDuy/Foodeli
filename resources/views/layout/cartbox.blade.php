<div class="cartbox-wrap">
				<div class="cartbox text-right">
					<button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
					<div class="cartbox__inner text-left">
						<div class="cartbox__items">
							@foreach ($cartbox as $c)
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
							</div>
							<!-- //Cartbox Single Item -->
							@endforeach

								
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