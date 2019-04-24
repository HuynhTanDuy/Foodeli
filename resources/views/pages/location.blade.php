@extends('layout.index')
@section('content')

 <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">{{$location->name}}</h2>
                                <nav class="bradcaump-inner">
                                  <span>{{$location->address}}</span>  
                                  <span><?php $i=0; ?>
                                   <?php for ($i=0; $i < $location->points; $i++) { ?>
                                   <li><i class="zmdi zmdi-star"></i></li>
                                   <?php  }  ?></span>
                                   <div class="time"><i class="far fa-clock"></i> Thời gian phục vụ: {{$location->openTime}}-{{$location->closeTime}} </div>
                                   <span>Phí giao hàng : {{$location->shipCharge}} </span> 
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Menu Grid Area -->
        <section class="food__menu__grid__area section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h1>MENU</h2>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                            
                            @foreach ($food as $f)
                          
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="menu-details.html">
                                            <img  src={{$f->image}} alt="list food images">
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                            <h2><a href="menu-details.html">{{$f->name}}</a></h2>
                                            <p>{{$f->description}}</p>
                                            <div class="list__btn">
                                                <a class="food__btn grey--btn theme--hover" href="order/{{$f->id}}">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span>{{$f->price}} VNĐ</span>
                                            </div>
                                           <span>Đã được đặt {{$f->numberOfReserve}} lần</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                            @endforeach   
                           
                           
                            
                        
                    </div>
                </div>
               
            </div>
        </section>
        <!-- End Menu Grid Area -->

@endsection