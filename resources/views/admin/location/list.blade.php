@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quán ăn
                            <small>List</small>
                        </h1>
                    </div>
                     @if (session('annoucement'))
                        <div class="alert alert-success">
                            {{session('annoucement')}}
                        </div>
                        @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Địa chỉ</th>
                                <th>Thể loại</th>
                                <th>Ảnh đại diện</th>
                                <th>Giờ mở cửa</th>
                                <th>Giờ đóng cửa</th>
                                <th>Điểm</th>
                                <th>Phí ship</th>

                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach ($location as $loca)
                            <tr class="odd gradeX" align="center">
                                <td>{{$loca->id}}</td>
                                <td>{{$loca->name}}</td>
                                <td>{{$loca->address}}</td>
                                <td>
                                   {{$loca->idCategory}}
                                </td>
                                <td> <img width="200" height="200" src=" {{$loca->avatar}}"> </td>
                                <td>{{$loca->openTime}}</td>
                                <td>{{$loca->closeTime}}</td>
                                <td>{{$loca->points}}</td>
                                <td>{{$loca->shipCharge}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/location/delete/{{$loca->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/location/edit/{{$loca->id}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection