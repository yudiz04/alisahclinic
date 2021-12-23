@extends('admin.master')
@section('title', 'app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header mt-5">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Patiens</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List Patiens</li>
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
                {{-- <div class="row">
                    <div class="col md-auto">
                        <a href="{{ url('/doctor/create') }}" class="btn btn-info btn-sm" role="button">Add Doctor</a>
                    </div>
                </div> --}}
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
                                <h3 class="card-title">List patiens</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" style="text-align:center;">
                                    <thead>
                                        <tr>
                                            <th style="background-color: #04AA6D" ;>No</th>
                                            <th style="background-color: #04AA6D" ;>Spesialist</th>
                                            <th style="background-color: #04AA6D" ;>Dokter</th>
                                            <th style="background-color: #04AA6D" ;>Tanggal Temu</th>
                                            <th style="background-color: #04AA6D" ;>Waktu Temu</th>
                                            <th style="background-color: #04AA6D" ;>Keluhan</th>
                                            <th style="background-color: #04AA6D" ;>Nama Pasien</th>
                                            <th style="background-color: #04AA6D" ;>Tanggal Lahir</th>
                                            <th style="background-color: #04AA6D" ;>Gender</th>
                                            <th style="background-color: #04AA6D" ;>Email</th>
                                            <th style="background-color: #04AA6D" ;>Kontak</th>
                                            <th style="background-color: #04AA6D" ;>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appointment as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->specialist->subject }}</td>
                                                <td>{{ $item->doctor->name }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->time }}</td>
                                                <td>{{ $item->keluhan }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->birth }}</td>
                                                <td>{{ $item->gender }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->contact }}</td>
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
