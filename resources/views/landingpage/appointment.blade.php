@extends('user.master')
@section('title', 'appointment')
    
@section('content')
<body>

<section id="form">
    <div class="container"> 
        <h2>Form Janji Temu Pasien</h2>
        <form action="{{ url('/appointment') }}" method="POST" class="appointment-form row g-3" id="appointment-form"
        enctype="multipart/form-data">
        @csrf
        
            <div class="col-md-6">
                <select name="specialist" class="form-control @error('specialist') is-invalid @enderror" id="specialist" onChange="document.getElementById('form_id').submit();" required>
                    <option selected value="">Pilih Spesialist</option>
                    @foreach ($specialist as $item)
                    <option @if($specialist_id==$item->id) ? {{'selected'}} : '' @endif value="{{ $item->id }}">{{ $item->subject }}</option>
                    @endforeach
                </select> 
                @error('specialist')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                
            </div>
            <div class="col-md-6">
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
            <div class="col-md-6">
                <input type="text" onfocus="(this.type='date')" name="date" class="form-control" placeholder="Pilih Tanggal" @error('date') is-invalid @enderror"
                    id="date" value="{{ old('date') }}">
                @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <select id="time" name="time" class="form-select" aria-label=".form-select-sm example"
                    onChange="document.getElementById('form_id').submit();" required>
                    <option selected value="">Pilih Waktu</option>
                    <option value="Pagi">Pagi</option>
                    <option value="Siang">Siang</option>
                </select>
            </div>
            <div class="col-12">
                <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Keluhan">
            </div>
            <h3>Data Pasien</h3>
            <div class="col-md-6">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" placeholder="Nama Lengkap">
                        @error('name') 
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
            </div>
            <div class="col-md-6">
                <select id="gender" name="gender" class="form-select" aria-label=".form-select-sm example"
                    onChange="document.getElementById('form_id').submit();" required>
                    <option selected value="">Jenis Kelamin</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
            <div class="col-md-6">
                <input type="text" onfocus="(this.type='date')" name="birth" class="form-control" placeholder="Tanggal Lahir" @error('birth') is-invalid @enderror"
                            id="birth" value="{{ old('birth') }}">
                        @error('birth')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" placeholder="Alamat Email">
                        @error('email') 
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
            </div>
            <div class="col-md-6">
                <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" id="contact" value="{{old('contact')}}" placeholder="No HP">
                        @error('contact') 
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
            </div>
            <div class="form-submit">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        
        </form>
    </div>
    
</section>

{{-- <section id="form">
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
                                  <option value="Pagi">Pagi</option>
                                  <option value="Siang">Siang</option>
                                  
                                </select>
                              </div>
                           
                    </div>
                    <input for="keluhan" type="text" name="keluhan" id="keluhan" placeholder="Keluhan"/>
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
                                
                                <select class="form-control" name="gender" id="gender">
                                  <option value="Pria">Pria</option>
                                  <option value="Wanita">Wanita</option>
                                  
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
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the <a
                            href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>  --}}
</body>
    
@endsection