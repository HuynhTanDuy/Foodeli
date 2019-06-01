@extends('layout.index')
@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--18">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Quản lí cửa hàng</h2>
                        <nav class="bradcaump-inner">
                            
                           @if(count($errors)>0)
                        <div class="alert alert-danger"> 
                             @foreach ($errors->all() as $err) 
                                {{$err}} <br>
                            @endforeach
                        </div>
                        @endif
                        @if (session('annoucement'))
                        <div class="alert alert-success">
                            {{session('annoucement')}}
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
                    <div  id="checkout-accordion">
                        
                        
                        
                        <!-- Billing Method -->
                        <div  class="single-accordion">
                            <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">Thông tin cửa hàng</a>
                            <div id="billing-method" class="collapse">
                                <div class="accordion-body billing-method fix">
                                    <form action="location-management/{{$location->idOwner}}" class="billing-form checkout-form" method="POST">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="row">
                                            
                                            <div class="col-6 mb--20">
                                                <label>Tên cửa hàng</label>
                                                    <input type="text" name="name" value="{{$location->name}}">
                                                </div>
                                            <div class="col-7 mb--20">
                                                <select name="idCategory">
                                                    <option value ="{{$category->id}}"selected >{{$category->name}}</option>
                                                    <option value="1">Đồ ăn</option>
                                                    <option value="2">Đồ uống</option>
                                                    <option value="3">Đồ chay</option>
                                                </select>
                                            </div>
                                                <div class="col-9 mb--20">
                                                    
                                                    <label>Địa chỉ</label>
                                                        <input type="text" name="address" value="{{$location->address}}">
                                                    </div>
                                                    <div class="col-6 mb--20">
                                                        <label>Số điện thoại</label>
                                                        <input value="{{$location->phone_number}}" name="phone_number" type="text">
                                                    </div>

                                                    <div class="col-6 mb--20">
                                                        <label>Email</label>
                                                        <input type="email" name="email" value="{{$location->email}}">
                                                    </div>
                                                    <div class="col-6 mb--20">
                                                        <label>Website</label>
                                                        <input value="{{$location->website}}" name="website" type="text">
                                                    </div>
                                                    <div class="col-6 mb--20">
                                                        <label>Phí ship</label>
                                                        <input type="text" name="shipCharge" value="{{$location->shipCharge}}">
                                                    </div>
                                                    <div class="col-6 mb--20">
                                                        <label>Thời gian mở cửa</label>
                                                       <input class="cr-round--lg" name="openTime" type="time" value="{{$location->openTime}}">
                                                    </div>
                                                     <div class="col-6 mb--20">
                                                        <label>Thời gian đóng cửa</label>
                                                       <input class="cr-round--lg" name="closeTime" type="time" value="{{$location->closeTime}}">
                                                    </div>
                                                    <button type="submit" class="food__btn">Cập nhật</button>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <form action="placeOrder" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <!-- Shipping Method -->
                                    <div class="single-accordion">
                                        <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#shipping-method">Danh sách món ăn</a>
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
                            
                            
                        </div>
                    </div>
                    </div><!-- Checkout Section End-->
                </section>
                
                
                @endsection