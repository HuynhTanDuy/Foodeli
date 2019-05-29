@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách cửa hàng đăng kí chờ xét duyệt
                
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
                        <th>Thể loại</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Mô tả</th>
                        <th>Người đăng kí</th>
                        <th>Duyệt</th>
                        <th>Sửa</th>
                        
                        <th>Bỏ qua</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($location_pending as $lp)
                    <tr class="odd gradeX" align="center">
                        <td>{{$lp->id}}</td>
                        <td>{{$lp->name}}</td>
                        <td>{{$lp->category}}</td>
                        <td>{{$lp->address}}</td>
                        <td>{{$lp->phone_number}}</td>
                        <td>{{$lp->email}}</td>
                        <td>{{$lp->website}}</td>
                        <td>{{$lp->description}}</td>
                        <td>{{$lp->users->name}}</td>
                         <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/location_pending/accept/{{$lp->id}}">Duyệt</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/news/delete/{{$lp->id}}">Sửa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/news/edit/{{$lp->id}}">Xóa</a></td>
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