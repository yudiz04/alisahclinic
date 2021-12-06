@extends('user.master')
@section('title', 'landingpage')

@section('content')

    <body>
        {{-- <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="text-center">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
  </div> --}}

        <!-- Section: intro -->
        <section id="intro" class="intro">
            <div class="intro-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 left animate__animated animate__fadeInLeft animate__delay-1s"
                            data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">Klinik Pratama Alisah</h2>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                <h4 class="h-light">Provide the best for your healthcare </h4>
                            </div>
                            <div class="well well-trans">
                                <div class="wow fadeInRight" data-wow-delay="0.1s">
                                    <ul class="lead-list">
                                        <li> <i class="fas fa-check"></i> <span class="list"><strong>Dokter
                                                    unggul dan berkualitas</strong></span></li>
                                        <li> <i class="fas fa-check"></i> <span class="list"><strong>Fasilitas
                                                    lengkap dan nyaman</strong></span></li>
                                        <li> <i class="fas fa-check"></i> <span class="list"><strong>Menerima
                                                    tes PCR dan swab antigen</strong></span></li>
                                        <li> <i class="fas fa-check"></i> <span class="list"><strong>Melayani
                                                    BPJS kesehatan dan umum</strong></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-wrapper">
                                <div class="wow" data-wow-duration="2s" data-wow-delay="0.2s">

                                    <div class="panel panel-skin">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><span class="fa fa-edit"></span> Buat Janji Temu
                                            </h3>
                                        </div>
                                        {{-- <form action="{{ url('/') }}" method="POST" class="appointment-form row g-3" enctype="multipart/form-data">
                @csrf --}}
                                        <div class="panel-body">

                                            {{-- <form action="{{url('/')}}" id="form_id" role="form" class="lead"> --}}
                                            {{-- <form action="{{ url('/appointment') }}" id="post" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf --}}
                                            
                                                <div class="col-12">
                                                    <form action="{{ url('/') }}" id="form_id" role="form"
                                                        class="lead">
                                                        <div class="form-group">
                                                            <select name="specialist"
                                                                class="form-control @error('specialist') is-invalid @enderror"
                                                                id="specialist"
                                                                onChange="document.getElementById('form_id').submit();"
                                                                required>
                                                                <option selected value="">Pilih Spesialist</option>
                                                                @foreach ($specialist as $item)
                                                                    <option @if ($specialist_id == $item->id) ? {{ 'selected' }} : '' @endif
                                                                        value="{{ $item->id }}">
                                                                        {{ $item->subject }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <form action="{{ url('/appointment') }}" id="post" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    @if (isset($_GET['specialist']))
                                                        <input type="hidden" name="spesialist_input"
                                                            value="{{ $_GET['specialist'] }}">
                                                    @endif

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <select name="doctor"
                                                                class="form-control @error('doctor') is-invalid @enderror"
                                                                id="doctor">
                                                                <option selected value="">Pilih Dokter</option>
                                                                @foreach ($doctor as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                            

                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" onfocus="(this.type='date')" name="date"
                                                            class="form-control" placeholder="Pilih Tanggal"
                                                            @error('date') is-invalid @enderror id="date"
                                                            value="{{ old('date') }}">
                                                        @error('date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <select id="time" name="time" class="form-select"
                                                            aria-label=".form-select-sm example">
                                                            {{-- onChange="document.getElementById('form_id').submit();" required> --}}
                                                            <option selected value="">Pilih Waktu</option>
                                                            <option value="Pagi">Pagi</option>
                                                            <option value="Siang">Siang</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="keluhan"
                                                            id="keluhan" placeholder="Keluhan">
                                                    </div>
                                                </div>
                                                <h5>Data Pasien</h5>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            id="name" value="{{ old('name') }}"
                                                            placeholder="Nama Lengkap">
                                                        @error('name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <select id="gender" name="gender" class="form-select"
                                                            aria-label=".form-select-sm example">
                                                            {{-- onChange="document.getElementById('form_id').submit();" required> --}}
                                                            <option selected value="">Jenis Kelamin</option>
                                                            <option value="Pria">Pria</option>
                                                            <option value="Wanita">Wanita</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" onfocus="(this.type='date')" name="birth"
                                                            class="form-control" placeholder="Tanggal Lahir"
                                                            @error('birth') is-invalid @enderror" id="birth"
                                                            value="{{ old('birth') }}">
                                                        @error('birth')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            id="email" value="{{ old('email') }}"
                                                            placeholder="Alamat Email">
                                                        @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="contact"
                                                            class="form-control @error('contact') is-invalid @enderror"
                                                            id="contact" value="{{ old('contact') }}"
                                                            placeholder="No HP">
                                                        @error('contact')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="submit" value="Submit" class="btn btn-primary"
                                                onChange="document.getElementById('post').submit();">

                                            {{-- <p class="lead-footer">* Konfirmasi selanjutnya melalui whatsapp dan alamat email</p> --}}
                                            {{-- </form> --}}
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="appointment">
    <div class="container">
      <form action="{{url('/')}}" id="form_id">
      <select id="specialist" name="specialist" class="form-select form-select-sm" aria-label=".form-select-sm example"
      onChange="document.getElementById('form_id').submit();" required>
        <option selected>Pilih Spesialis</option>
        @foreach ($specialist as $item) 
        <option @if ($specialist_id == $item->id) ? {{'selected'}} : '' @endif value="{{ $item->id }}">{{ $item->subject }}</option>
        @endforeach
      </select>
      
      <select id="doctor" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Pilih Dokter</option>
        @foreach ($doctor as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
      
      <input type="text" onfocus="(this.type='date')" class="form-select-sm" style="width:26%;" aria-label=".form-select-sm example"
        name="date" placeholder="Pilih Tanggal" @error('date') is-invalid @enderror
        id="date" value="{{ old('date') }}">
        @error('date')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        
      <button href="{{url('/appointment')}}" type="button" class="btn btn-primary btn-sm" aria-label=".form-select-sm example">
        Submit
      </button>
    </form>
    </div>
  </section> --}}

        {{-- <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="{{asset('assets/user/img/f3.jpg')}}" alt="person graphic" style="width: 400px; height:auto;">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <i class="fas fa-stethoscope fa-2x" style="color: peachpuff;"></i>
                  </div>
                  <div class="right-text">
                    <h4>Data Analysis</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <i class="fas fa-syringe fa-2x" style=" color: peachpuff"></i>
                  </div>
                  <div class="right-text">
                    <h4>Data Reporting</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <i class="fas fa-procedures fa-2x" style="color: peachpuff"></i>
                  </div>
                  <div class="right-text">
                    <h4>Web Analytics</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <i class="fas fa-ambulance fa-2x"></i>
                  </div>
                  <div class="right-text">
                    <h4>SEO Suggestions</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

        <section id="content">
            <div class="container">
                <h3 class="fasi text-center pt-5 pb-3">FASILITAS</h3>
                <div class="row pt-3 pb-4">
                    <div class="col-md-3 text-center animate__animated animate__fadeInUp animate__delay-2s"
                        data-aos="fade-up">
                        <div class="text-center box"><i class="fas fa-user-md fa-3x"></i></div>
                        <p class="font-weight-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor,
                            repellat.
                        </p>
                    </div>
                    <div class="col-md-3 text-center animate__animated animate__fadeInUp animate__delay-2s"
                        data-aos="fade-up">
                        <div class="text-center box"><i class="fas fa-plus fa-3x"></i></div>
                        <p class="font-weight-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor,
                            repellat.
                        </p>
                    </div>
                    <div class="col-md-3 text-center animate__animated animate__fadeInUp animate__delay-2s"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center box"><i class="fas fa-syringe fa-3x" style=" color: peachpuff"></i></div>
                        <p class="font-weight-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia,
                            inventore!
                        </p>
                    </div>
                    <div class="col-md-3 text-center animate__animated animate__fadeInUp animate__delay-2s"
                        data-aos-delay="100" data-aos="fade-up">
                        <div class="text-center box"><i class="fas fa-procedures fa-3x" style="color: peachpuff"></i></div>
                        <p class="font-weight-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam,
                            odit.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="doctor_section">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2 class="doc text-center pt-3">
                        Our Doctors
                    </h2>
                    <p class="col-md-10 mx-auto px-0">
                        Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit,
                        quisquam
                        aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe quas fugit,
                        beatae id
                        quisquam.
                    </p>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4 mx-auto">
                        <div class="box animate__animated animate__fadeInLeft animate__delay-3s">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/img/d1.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Elina Josh
                                </h5>
                                <h6 class="">
                                    Doctor
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mx-auto">
                        <div class="box animate__animated animate__fadeInUp animate__delay-3s">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/img/d2.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Adam View
                                </h5>
                                <h6 class="">
                                    Doctor
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mx-auto">
                        <div class="box animate__animated animate__fadeInRight animate__delay-3s">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/img/d3.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Mia Mike
                                </h5>
                                <h6 class="">
                                    Doctor
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="{{ url('/dokter') }}">
                        View All
                    </a>
                </div>
            </div>
        </section>

        <section id="artikel">
            <div class="container overflow-hidden py-5">
                <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <h3>ARTIKEL</h3>
                        </div>
                    </div>

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="service card-img" src="{{ asset('assets/user/img/f3.jpg') }}" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Healthy
                                        Life</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="{{ asset('assets/user/img/f3.jpg') }}" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span
                                        class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Vaccine</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="{{ asset('assets/user/img/f3.jpg') }}" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Corona
                                        Virus</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="{{ asset('assets/user/img/f3.jpg') }}" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span
                                        class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Medicine</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->
                </div>
            </div>
        </section>


    </body>

@endsection
