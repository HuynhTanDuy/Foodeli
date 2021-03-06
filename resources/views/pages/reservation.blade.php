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
                                    <li>
                                   <?php for ($i=0; $i < $location->points; $i++) { ?>
                                   <i class="zmdi zmdi-star"></i></li>
                                   <?php  }  ?></span>
                                   
                                   <div class="time"><i class="far fa-clock"></i> Thời gian phục vụ: {{$location->openTime}}-{{$location->closeTime}} </div>
                                   <button disabled="" class="btn btn-primary">
                                       <span class="icon icon-phone-white"></span>
                                       Gọi để đặt bàn {{$location->phone_number}}
                                   </button>
                                   <a  class="accountbox-trigger food__btn grey--btn theme--hover" href="reserve/{{$location->id}}">Đặt bàn ngay</a>
                                  
                                </nav>
                                @if(count($errors)>0)
                                    <div class="alert alert-danger"> 
                                         @foreach ($errors->all() as $err) 
                                            {{$err}} <br>
                                        @endforeach
                                    </div>
                                @endif
                                @if(session('annoucement'))
                                    <div class="alert alert-success">
                                        {{session('annoucement')}}
                                    </div>
                                @endif
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
                        <h1>Giới thiệu</h2>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                            <iframe width="840" height="500" src="{{$location->video}}">
</iframe>
                        
                    </div>
                    <div class="col-lg-12">
                        {{$location->description}}
                    </div>
                </div>
               
            </div>
        </section>

        <!-- End Menu Grid Area -->
        <!-- Start Blog Comment -->
         <div class="container">
                                   <div class="row">
                                <div class="blog__comment__wrapper">
                                   
                                    <h2 class="blog__title">Cảm nhận người dùng</h2>
                                 
                                     
                                    <div class="blog__comment__inner">
                                        <!-- Start Single Comment -->
                                         @foreach($location->comment as $cm)
                                        <div style="margin-bottom: 10px;"class="comment d-flex flex-wrap flex-md-nowrap flex-lg-nowrap">
                                            <div class="commnet__thumb">
                                                <img style="width:200px; height:200px"src="images/user/avatar/{{$cm->user->avatar}}" alt="comment images">
                                            </div>
                                            <div class="comment__details">
                                                <h5>{{$cm->user->name}}</h5>
                                                <div class="cmment__date d-flex justify-content-between">
                                                    <span>February  13,  2018</span>
                                                    <ul class="rating d-flex">
                                                        <li><i class="zmdi zmdi-star"></i></li>
                                                        <li><i class="zmdi zmdi-star"></i></li>
                                                        <li><i class="zmdi zmdi-star"></i></li>
                                                        <li><i class="zmdi zmdi-star"></i></li>
                                                        <li><i class="zmdi zmdi-star"></i></li>
                                                    </ul>
                                                </div>
                                                <p>{{$cm->content}}</p>
                                                <ul class="reply__btn d-flex justify-content-start justify-content-md-end justify-content-lg-end">
                                                    <li><a href="#"><i class="fa fa-reply"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-angle-up"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-angle-down"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                       
                                        <!-- End Single Comment -->
                                          @endforeach
                                    </div>
                                  
                                </div>
                                
                            </div>
                        </div>

                                <!-- End Blog Comment -->

                                 <!-- Start Comment Form -->
                                  <div class="container">
                                   <div class="row">
                                <div class="blog__comment__form">
                                    <h2 class="blog__title">Để lại bình luận</h2>
                                    <div class="comment__form">
                                        <div class="ct__form__box">
                                            <form action="location/{{$location->id}}" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <textarea name="comment_area" style="width:800px" name="comment" placeholder="Nhập bình luận"></textarea>
                                        </div>
                                        <div class="col-12 mb--20">
                                                <button style="margin:10px 0px 0px 0px"class="food__btn">Gửi</button>
                                            </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                     
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Thông tin đặt bàn</a>
                    </li>
                    
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <form action="reserve/{{$location->id}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="single-input">
                                <h5>Họ tên</h5>
                                <input class="cr-round--lg" name="name" type="text" @if (Auth::user()) value="{{Auth::user()->name}}" @endif>
                            </div>
                            <div class="single-input">
                                <h5>Số điện thoại</h5>
                                <input class="cr-round--lg" name="phone_number" type="text"  @if (Auth::user()) value="{{Auth::user()->phone_number}}" @endif>
                            </div>
                            <div class="single-input">
                                <h5>Thời gian</h5>
                                <input class="cr-round--lg" name="time" type="time" >
                            </div>
                            
                            <div class="single-input">
                                 <h5>Ghi chú</h5>
                                <input class="cr-round--lg" name="note" type="text" >
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"  ><span>Đặt chỗ</span></button>
                            </div>
                           
                        </form>
                    </div>
                  
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
                                <!-- End Comment Form -->
@endsection