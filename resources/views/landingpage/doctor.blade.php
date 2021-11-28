@extends('user.master')
@section('title', 'doctor')
    
@section('content')
<body>
    <div class="container">
        <div class="heading_container heading_center">
          <h2 class="doc text-center">
            Our Doctors
          </h2>
          <p class="col-md-10 mx-auto px-0">
            Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit, quisquam
            aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe quas fugit, beatae id
            quisquam.
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="{{asset('assets/user/img/d1.jpg')}}" alt="">
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
            <div class="box">
              <div class="img-box">
                <img src="{{asset('assets/user/img/d2.jpg')}}" alt="">
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
            <div class="box">
              <div class="img-box">
                <img src="{{asset('assets/user/img/d3.jpg')}}" alt="">
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
          <a href="{{url('/doctor')}}">
            View All
          </a>
        </div>
      </div>
</body>
@endsection