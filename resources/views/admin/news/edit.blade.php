@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin tức
                            <small>{{$news->name}}</small>
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
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <form action="admin/news/editPost/{{$news->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="tittle" value="{{$news->tittle}}" />
                            </div>
                            <div class="form-group">
                                <label>Highlight</label>
                                <input class="form-control" name="highlight" value="{{$news->highlight}}" />
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <input  class="form-control" name="summary" value="{{$news->summary}}" />
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" name="content" placeholder="{{$news->content}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input class="form-control" name="images"value="{{$news->images}}" />
                            </div>
                            
                           
                           
                           
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
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