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
                        <div  class="single-accordion">
                            <a class="accordion-head collapsed" data-toggle="collapse" data-parent="menu-accordion" href="#menu-method">Menu cửa hàng</a>
                            <div id="menu-method" class="collapse">
                                <div class="accordion-body billing-method fix">
                                    <form action="location-management/{{$location->idOwner}}" class="billing-form checkout-form" method="POST">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="row">
                                            
                                            <div class="col-12 mb--20">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr align="center">
                                                            
                                                            <th>Tên</th>
                                                            <th>Đơn giá</th>
                                                            <th>Mô tả</th>
                                                            <th>Sửa</th>
                                                            <th>Xóa</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($food as $f)
                                                        <tr class="odd gradeX" align="center">
                                                            <td>{{$f->name}}</td>
                                                            <td>{{$f->price}}</td>
                                                            <td>{{$f->description}}</td>
                                                            
                                                          
                                                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/location/edit/">Sửa</a></td>
                                                              <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="location-management/delete/{{Auth::id()}}/{{$f->id}}">Xóa</a></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </form>
                                            </div>
                                        </div>
                                    </div>

                                     <div  class="single-accordion">
                            <a class="accordion-head collapsed" data-toggle="collapse" data-parent="menu1-accordion" href="#menu1-method">Thêm món ăn</a>
                            <div id="menu1-method" class="collapse">
                                <div class="accordion-body billing-method fix">
                                    <form action="location-management/add/{{$location->idOwner}}" class="billing-form checkout-form" method="POST">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="row">
                                              <div class="col-6 mb--20">
                                                <label>Tên món ăn</label>
                                                <input type="text" name="nameFood" >
                                            </div>
                                            <div class="col-7 mb--20">
                                                <label>Ảnh đại diện</label>
                                                <input type="text" name="" >
                                            </div>
                                             <div class="col-5 mb--20"></div>
                                               <div class="col-3 mb--20">
                                                <label>Đơn giá</label>
                                                <input type="text" name="priceFood" >
                                            </div>
                                              <div class="col-10 mb--20">
                                          <label>Mô tả</label>
                                               <textarea name="desFood" style="width:800px" name="comment" ></textarea>
                                            </div>
                                            <div class="col-2 mb--20"></div>
                                            <div class="col-3 mb--20">
                                             <button type="submit" class="food__btn">Thêm món ăn</button>
  </div>
                                          
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