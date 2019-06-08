<?php $subtotal=0;$shippingCharge=0;
	  $numbers = array(0,0,0,0,0,0);
	 
 ?>
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
										<img src="images/food/{{$c->getFood->image}}" alt="small thumbnail">
									</a>
								</div>
								<div class="cartbox__item__content">
									<h5><a href="product-details.html" class="product-name">{{$c->getFood->name}}</a></h5>
									<p><span>{{$c->getFood->getLocation->name}}</span></p>
									<span class="price">{{$c->getFood->price}} VNĐ</span>
								</div>
								<a href="deleteOrder/{{$c->id}}"><button  class="cartbox__item__remove"> 
								<i class="fa fa-trash"></i>
								</button></a>
							</div>
							<!-- //Cartbox Single Item -->
							<?php $subtotal+=$c->getFood->price;
								  if ($numbers[$c->getFood->idLocation]==0) {
								   	$numbers[$c->getFood->idLocation]=1;
								   	$shippingCharge+=$c->getFood->getLocation->shipCharge;
								   } 	
							  ?>
							

								
						</div>
									<div class="cartbox__total">
										<ul>
											<li><span class="cartbox__total__title">Subtotal</span><span class="price">{{$subtotal}} VNĐ</span></li>
											<li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">{{$shippingCharge}} VNĐ</span></li>
											<li class="grandtotal">Total<span class="price">{{$subtotal+$shippingCharge}}</span></li>
										</ul>
									</div>
									<div class="cartbox__buttons">
										
										<a class="food__btn" href="checkout/{{$c->getFood->getLocation->idOwner}}"><span>Checkout</span></a>
									</div>
								</div>
							</div>
							@endforeach
				</div><!-- //Cartbox -->