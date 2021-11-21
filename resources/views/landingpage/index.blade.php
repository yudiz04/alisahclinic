@extends('user.master')
@section('title', 'landingpage')
    
@section('content')

<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="text-center">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
  </div>

  <section id="appoinment">
    <div class="container">
      <form action="{{url('/')}}" id="form_id">
      <select id="specialist" name="specialist" class="form-select form-select-sm" aria-label=".form-select-sm example"
      onChange="document.getElementById('form_id').submit();" required>
        <option selected>Pilih Spesialis</option>
        @foreach ($specialist as $item)
        <option @if($specialist_id==$item->id) ? {{'selected'}} : '' @endif value="{{ $item->id }}">{{ $item->subject }}</option>
        @endforeach
        
      </select>
      </form>
      <select id="doctor" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Pilih Dokter</option>
        @foreach ($doctor as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach

        

      </select>
      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Pilih Tanggal</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <button type="button" class="btn btn-primary btn-sm" aria-label=".form-select-sm example">
        Submit
      </button>
    </div>
  </section>

  <section id="content">
    <div class="container">
      <h3 class="text-center pt-5 pb-3">FASILITAS</h3>
      <div class="row pt-3">
        <div class="col-md-4 text-center" data-aos="fade-up">
          <div class="text-center box"><i class="fas fa-stethoscope fa-3x" style="color: peachpuff;"></i></div>
          <p class="font-weight-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, repellat.
          </p>
        </div>
        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="text-center box"><i class="fas fa-syringe fa-3x" style=" color: peachpuff"></i></div>
          <p class="font-weight-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia,
            inventore!
          </p>
        </div>
        <div class="col-md-4 text-center" data-aos-delay="100" data-aos="fade-up">
          <div class="text-center box"><i class="fas fa-procedures fa-3x" style="color: peachpuff"></i></div>
          <p class="font-weight-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam,
            odit.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="page-section">
    <h3 class="text-center pb-3">ARTIKEL</h3>
    <div class="row justify-content-center pt-3">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('assets/user/img/1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="{{asset('assets/user/img/2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="{{asset('assets/user/img/3.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </section>
  
</body>

@endsection

