<section id="navbar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}"><i class="fas fa-stethoscope pt-2 pb-2"></i>KLINIK ALISAH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto pt-2 pb-2">
            <a class="nav-link" aria-current="page" href="{{url('/')}}">Beranda</a>
            <a class="nav-link" href="{{url('/dokter')}}">Dokter</a>
            <a class="nav-link" href="#">Fasilitas</a>
            {{-- <a class="nav-link" href="{{url('/appointment')}}">Form</a> --}}
            <a class="nav-link" href="{{url('/artikel')}}">Artikel</a>
        </div>
      </div>
    </div>
  </nav>
</section>