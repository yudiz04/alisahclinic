@extends('admin.master')
@section('title', 'Edit article')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">doctor</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit article</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit <small>article</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('/article/' . $article->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="img">Article Photo</label>
                                        <input type="file" class="form-control-file" name="img" id="img">
                                    </div>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="title">title</label>
                                            <input type="title" name="title"
                                                class="form-control @error('title') is-invalid @enderror" id="name"
                                                placeholder="title" value="{{ $article->title }}">
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="text">Text</label>
                                            <input type="text" name="text"
                                                class="form-control @error('text') is-invalid @enderror" id="name"
                                                placeholder="text" value="{{ $article->text }}">
                                            @error('text')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    </div>
    <!-- /.content -->
@endsection
