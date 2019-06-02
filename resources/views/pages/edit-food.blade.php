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
                
                <div class="col-lg-6 col-12 mb-30">
                    
                    <!-- Checkout Accordion Start -->
                    <div  id="checkout-accordion">
                        
                        
                        
                        <!-- Billing Method -->
                        <div  class="single-accordion">
                            <a class="accordion-head "  data-parent="#checkout-accordion" href="#billing-method">Sửa món ăn</a>
                            <div id="billing-method" >
                                <div class="accordion-body billing-method fix">
                                    <form action="location-management/edit/{{$food->id}}" class="billing-form checkout-form" method="POST">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="row">
                                            
                                            <div class="col-6 mb--20">
                                                <label>Tên món</label>
                                                <input type="text" name="name" value="{{$food->name}}">
                                            </div>
                                           <div class="col-6 mb--20"></div>
                                            <div class="col-6 mb--20">
                                                
                                                <label>Đơn giá</label>
                                                <input type="text" name="price" value="{{$food->price}}">
                                            </div>
                                            <div class="col-9 mb--20">
                                                <label>Mô tả</label>
                                              <textarea name="des" style="width:800px"  ></textarea>
                                     
                                            <button type="submit" class="food__btn">Cập nhật</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>                
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                                    </div><!-- Checkout Section End-->
                                </section>
                                
                                
                                @endsection