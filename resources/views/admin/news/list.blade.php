@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin tức
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
                                <th>Tiêu đề</th>
                                <th>Ảnh</th>
                                <th>Highlight</th>
                                <th>Tóm tắt</th>
                               
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $n)
                            <tr class="odd gradeX" align="center">
                                <td>{{$n->id}}</td>
                                <td>{{$n->tittle}}</td>
                                <td>{{$n->images}}</td>
                                <td>
                                   {{$n->highlight}}
                                </td>
                                <td>{{$n->summary}}</td>
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/news/delete/{{$n->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/news/edit/{{$n->id}}">Edit</a></td>
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