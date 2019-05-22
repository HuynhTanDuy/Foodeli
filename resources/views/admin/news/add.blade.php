@extends('admin.layout.index')

@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin tức
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

                        <form action="admin/news/addPost" method="POST" enctype="multipart/form-data">
                             @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="tittle" placeholder="Please Enter Name" />
                            </div>
                            
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <input  class="form-control" name="summary" placeholder="Please Enter Phone Number" />
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <input  class="form-control" name="content" placeholder="Please Enter Phone Number" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" class="form-control" name="images" placeholder="Please Enter Password" />
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

