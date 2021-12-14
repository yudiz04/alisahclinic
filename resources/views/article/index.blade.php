@extends('admin.master')
@section('title', 'article')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header mt-5">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Artikel</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List Artikel</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <div class="col md-auto">
                        <a href="{{ url('/article/create') }}" class="btn btn-info btn-sm" role="button">Add Article</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        @if (session('status'))
                            <div class="alert alert-primary">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List article</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" style="text-align:center;">
                                    <thead>
                                        <tr>
                                            <th style="background-color: #04AA6D" ;>No</th>
                                            <th style="background-color: #04AA6D" ;>Img</th>
                                            <th style="background-color: #04AA6D" ;>Title</th>
                                            <th style="background-color: #04AA6D" ;>Text</th>
                                            <th style="background-color: #04AA6D" ;>Edit</th>
                                            <th style="background-color: #04AA6D" ;>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($article as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->img }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->text }}</td>
                                                <td>
                                                    <a href="{{ url('/article/' . $item->id . '/edit') }}"><i
                                                            class="fas fa-pencil-alt" style="color: red"></i></a>
                                                    {{-- <form action="{{url('/doctor/'.$item->id)}}" method="POST">
                          @csrf
                        </form> --}}
                                                </td>
                                                <td>
                                                    <form action="{{ url('/article/' . $item->id) }}" method="POST">
                                                        <button type="submit" style="border:none; background:none; ">
                                                            <i class="fas fa-trash-alt" style="color: red"></i>
                                                            @csrf
                                                            @method('delete')
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
