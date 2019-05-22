@extends('admin.layout.index')

@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quán ăn
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

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
                        @if (session('error'))
                        <div class="alert alert-success">
                            {{session('error')}}
                        </div>
                        @endif

                        <form action="admin/location/addPost" method="POST" enctype="multipart/form-data">
                             @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input  class="form-control" name="address" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name="idCategory">
                                    <label>Thể loại</label>
                                    @foreach ($category as $c)
                                    <option value="{{$c->id}}" > {{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input  class="form-control" name="avatar" placeholder="Please Enter Phone Number" />
                            </div>
                            <div class="form-group">
                                <label>Giờ mở cửa</label>
                                <input  class="form-control" name="openTime" placeholder="Please Enter Phone Number" />
                            </div>
                            <div class="form-group">
                                <label>Giờ đóng cửa</label>
                                <input  class="form-control" name="closeTime" placeholder="Please Enter Phone Number" />
                            </div>
                            <div class="form-group">
                                <label>Điểm</label>
                                <input  class="form-control" name="points" placeholder="Please Enter Phone Number" />
                            </div>
                            <div class="form-group">
                                <label>Phí ship</label>
                                <input  class="form-control" name="shipCharge" placeholder="Please Enter Phone Number" />
                            </div>
                           
                            

                            <button type="submit" class="btn btn-default">Thêm </button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection

