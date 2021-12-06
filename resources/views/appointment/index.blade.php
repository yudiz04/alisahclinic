@extends('admin.master')
@section('title', 'appointment')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form by Colorlib</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="{{ asset('assets/app/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

        <!-- Main css -->
        <link rel="stylesheet" href="{{ asset('assets/app/css/style.css') }}">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    </head>

    <body>
        <div class="main">
            <div class="container">
                <form action="{{ url('/appointment') }}" method="POST" class="appointment-form" id="appointment-form"
                    enctype="multipart/form-data">
                    @csrf
                    <h2>Form Janji Temu Pasien</h2>
                    <div class="form-group-1">
                        <div class="select-list">
                            <select name="subject" class="form-control @error('subject') is-invalid @enderror" id="subject">
                                <option slected value="">Pilih Spesialist</option>
                                @foreach ($specialist as $item)
                                    <option value="{{ $item->id }}">{{ $item->subject }}</option>
                                @endforeach
                            </select>
                            @error('subject')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="select-list">
                            <select name="doctor" class="form-control @error('doctor') is-invalid @enderror" id="doctor">
                                <option slected value="">Pilih Dokter</option>
                                @foreach ($doctor as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('doctor')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="select-list">
                            <label for="date">Pilih Tanggal</label>
                            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
                                id="date" value="{{ old('date') }}">
                            @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="select-list">
                            <label for="time">Pilih Waktu</label>
                            
                                <div class="form-group">
                                    
                                    <select class="form-control" name="time" id="time">
                                      <option>Pagi</option>
                                      <option>Siang</option>
                                      
                                    </select>
                                  </div>
                               
                        </div>
                        <input for="request" type="text" name="request" id="request" placeholder="Keluhan" required />
                    </div>
                    <div class="form-group-2">
                        <h3>Data Pasien</h3>
                        <div class="form-group">
                            <label for="name">Nama Pasien</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
                            @error('name') 
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>
                        <div class="select-list">
                            <label for="birth">Tanggal Lahir</label>
                            <input type="date" name="birth" class="form-control @error('birth') is-invalid @enderror"
                                id="birth" value="{{ old('birth') }}">
                            @error('birth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="select-list">
                            <label for="time">Pilih Gender</label>
                            
                                <div class="form-group">
                                    
                                    <select class="form-control" name="time" id="time">
                                      <option>Pria</option>
                                      <option>Wanita</option>
                                      
                                    </select>
                                  </div>
                               
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}">
                            @error('email') 
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" id="contact" value="{{old('contact')}}">
                            @error('contact') 
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="form-check">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the <a
                                href="#" class="term-service">Terms and Conditions</a></label>
                    </div> --}}
                    {{-- <div class="form-submit">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- JS -->
        <script src="{{ asset('assets/app/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/main.js') }}"></script>
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
        
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>

@endsection
