@extends('layout.index')
@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Thanh toán</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">Checkout</span>
                                   @if(count($errors)>0)
                        <div class="alert alert-danger"> 
                             @foreach ($errors->all() as $err) 
                                {{$err}} <br>
                            @endforeach
                        </div>
                        @endif
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 

         <section class="htc__checkout bg--white section-padding--lg">
            <!-- Checkout Section Start-->
            <div class="checkout-section">
                <div class="container">
                    <div class="row">
                       @if (Auth::check())
                        <div class="col-lg-6 col-12 mb-30">
                               
                                <!-- Checkout Accordion Start -->
                                <div id="checkout-accordion">
                                   
                                   
                                    
                                    <!-- Billing Method -->
                                    <div class="single-accordion">
                                        <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">1. billing informatioon</a>
                                        <div id="billing-method" class="collapse">

                                            <div class="accordion-body billing-method fix">

                                                <form action="#" class="billing-form checkout-form">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-12 col-12 mb--20">                                 
                                                            <input type="text" name="name" value="{{Auth::user()->name}}">
                                                        </div>
                                                       
                                                        <div class="col-12 mb--20">                              
                                                            <input type="text" name="address" value="{{Auth::user()->address}}">
                                                        </div>
                                                                                                               
                                                        <div class="col-md-6 col-12">                                 
                                                            <input type="email" value="{{Auth::user()->email}}">
                                                        </div>
                                                        <div class="col-md-6 col-12">                                   
                                                            <input value="{{Auth::user()->phone_number}}" name="phoneNumber" type="text">
                                                        </div>                          
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <form action="placeOrder" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <!-- Shipping Method -->
                                    <div class="single-accordion">
                                        <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#shipping-method">2. shipping informatioon</a>

                                        <div id="shipping-method" class="collapse">

                                            <div class="accordion-body shipping-method fix">
                                               
                                                <fieldset>

                                                <h5>Địa chỉ Ship</h5>
                                               
                                                    <div class="row">
                                                        
                                                        <div class="col-12 mb--20">                              
                                                            <input type="text" name="addressShip" value="{{Auth::user()->address}}">
                                                        </div>
                                                                             
                                                    </div>
                                                </fieldset>

                                                <fieldset>

                                                <h5>Số điện thoại</h5>
                                               
                                                    <div class="row">
                                                        
                                                        <div class="col-12 mb--20">                              
                                                            <input type="text" name="phoneNumberShip" value="{{Auth::user()->phone_number}}">
                                                        </div>
                                                                             
                                                    </div>
                                                </fieldset>
                                               
                                                
                                            </div>
                                            
                                        </div>

                                    </div>
                                    
                                    <!-- Payment Method -->
                                    <div class="single-accordion">
                                        <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#payment-method">3. Payment method</a>
                                        <div id="payment-method" class="collapse">
                                            <div  class="accordion-body payment-method fix" >
                                              
                                                 <ul class="payment-method-list" >
                                                    <li class="active"><input type="radio" checked="true" name="paymentMethod" value="0">Thanh toán khi nhận hàng </li>
                                                    <li  class="payment-form-toggle"><input  type="radio" name="paymentMethod"  value="1">Thẻ tín dụng </li>
                                                </ul> 

                                               
                                                
                                                 <!-- <form action="#" class="payment-form">  -->
                                                    <div class="payment-form">
                                                    <div class="row">
                                                        <div class="input-box col-12 mb--20">
                                                            <label for="card-name">Họ tên chủ thẻ</label>
                                                            <input type="text" id="card-name" name="card_name" />
                                                        </div>
                                                        <div class="input-box col-12 mb--20 "  >
                                                            <label>Loại thẻ</label>
                                                            <select name="card_type">
                                                                <option>Please Select</option>
                                                                <option value="0">Đông Á </option>
                                                                <option value="1">BIDV</option>
                                                                <option value="2">ACB</option>
                                                                <option value="3">Vietcombank</option>
                                                                <option value="4">TCP</option>
                                                                <option value="5">Agribank</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-box col-12 mb--20">
                                                            <label for="card-number">Credit Card Number </label>
                                                            <input type="text" id="card-number" name="card_number" />
                                                        </div>
                                                       
                                                    </div></div>
                                            <!--     </form> -->
                                            
                                            </div>
                                        </div>

                                    </div>
                                    <li><button type="submit" class="food__btn">place order</button></li>
                                    </form>
                                </div><!-- Checkout Accordion Start -->
                        </div>
                       @else
                       <div class="col-lg-6 col-12 mb-30">
                        <!-- Checkout Method -->
                                    <div class="single-accordion">
                                        <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#checkout-method">1. Bạn cần phải sử dụng tài khoản Foodeli để tiến hành đặt hàng</a>
                                        
                                        <div id="checkout-method" class="collapse show">
                                            <div class="checkout-method accordion-body fix">
                                               
                                                <ul class="checkout-method-list">
                                                    <li class="active" data-form="checkout-login-form">Đăng nhập</li>
                                                    <li data-form="checkout-register-form">Đăng kí</li>
                                                </ul>
                                                @if(count($errors)>0)
                                                     <div class="alert alert-danger">
                                                    {{session('loi')}}
                                                     </div>
                                                @endif
                                                <form action="loginToOrder" class="checkout-login-form" method="post">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <div class="row">
                                                        <div class="input-box col-md-6 col-12 mb--20"><input name="email" type="email" placeholder="Email Address"></div>
                                                        <div class="input-box col-md-6 col-12 mb--20"><input name="password" type="password" placeholder="Password"></div>
                                                        <div class="input-box col-12"><input type="submit" value="Đăng nhập"></div>
                                                    </div>
                                                </form>
                                                
                                                <form action="signup" class="checkout-register-form" method="post">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <div class="row">
                                                        <div class="input-box col-md-6 col-12 mb--20"><input name="name" type="text" placeholder="Your Name"></div>
                                                        <div class="input-box col-md-6 col-12 mb--20"><input name="email" type="email" placeholder="Email Address"></div>
                                                        <div class="input-box col-md-6 col-12 mb--20"><input name="password" type="password" placeholder="Password"></div>
                                                        <div class="input-box col-md-6 col-12 mb--20"><input name="password2" type="password" placeholder="Confirm Password"></div>
                                                        <div class="input-box col-12"><input type="submit" value="Đăng kí"></div>
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>  
                        </div>
                       @endif
                            
                            <?php $subtotal=0;$shippingCharge=0;$numbers = array(0,0,0,0,0,0);?>
                            <!-- Order Details -->
                            <div class="col-lg-6 col-12 mb-30">
                               
                                <div class="order-details-wrapper">
                                    <h2>your order</h2>
                                    <div class="order-details">
                                        <form action="#">
                                            <ul>
                                                <li><p class="strong">Sản phẩm</p><p class="strong">Giá</p></li>
                                                @foreach ($cartbox as $c)
                                                <li><p>{{$c->getFood->name}}</p><p>{{$c->getFood->price}} VNĐ</p></li>
                                                <?php   $subtotal+=$c->getFood->price;
                                                        if ($numbers[$c->getFood->idLocation]==0) {
                                                        $numbers[$c->getFood->idLocation]=1;
                                                        $shippingCharge+=$c->getFood->getLocation->shipCharge;
                                                        }    
                                                ?>
                                                @endforeach
                                                <li><p class="strong">Tổng giá tiền sản phẩm</p><p class="strong">{{$subtotal}} VNĐ</p></li>
                                                 <li><p class="strong">Phí Ship</p><p class="strong">{{$shippingCharge}} VNĐ</p></li>
                                                <li><p class="strong">Tổng tiền</p><p class="strong">{{$subtotal+$shippingCharge}} VNĐ</p></li>
                                                
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        
                    </div>
                </div>
            </div><!-- Checkout Section End-->             
         </section>   
      
       
@endsection        
           
    

   