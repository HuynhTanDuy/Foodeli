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
                       <?php $subtotal=0;$shippingCharge=0;;$numbers = array_fill(0, 100,0);?>
                            <!-- Order Details -->
                            <div class="col-lg-12 col-12 mb-30">
                               
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
           
    

   