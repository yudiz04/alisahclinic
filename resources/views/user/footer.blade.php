<footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-detail">
            <h4>
              Klinik Alisah
            </h4>
            <p>
              Beatae provident nobis mollitia magnam voluptatum, unde dicta facilis minima veniam corporis laudantium
              alias tenetur eveniet illum reprehenderit fugit a delectus officiis blanditiis ea.
            </p>
          </div>
        </div> 
        <div class="col-lg-3">
          <h4 class="links">
            Links
          </h4>
          <div class="footer-links">
            <a class="active" href="index.html">
              Beranda
            </a>
            <a class="" href="about.html">
              Dokter
            </a>
            <a class="" href="departments.html">
              Fasilitas
            </a>
            <a class="" href="doctors.html">
              Form
            </a>
            <a class="" href="contact.html">
              Artikel
            </a>
          </div>
        </div>
        <div class="col-lg-3">
          <h4>
            Alamat kami
          </h4>
          <div class="footer-contact">
            <a href="">
              <i class="fas fa-map-marker-alt fa-1x"><span>Location</span></i>
            </a>
            <a href="">
              <i class="fab fa-whatsapp-square fa-1x"><span>Call +01 1234567890</span></i>
            </a>
            <a href="">
              <i class="fas fa-envelope fa-1x"><span>klinikalisah@gmail.com</span></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3">
          <h4>
            Social Media
          </h4>
          <div class="footer-social">
            <a href="">
              <i class="fab fa-facebook-f fa-2x"></i>
            </a>
            <a href="">
              <i class="fab fa-twitter fa-2x" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fab fa-instagram-square fa-2x"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-info text-center">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates<br><br></a>
        &copy; <span id="displayYear"></span> Distributed By
        <a href="https://themewagon.com/">ThemeWagon</a>
      </p>

    </div>
    </div>
  </footer>

  
  
  <script src="{{asset('assets/user/js/bootstrap.min.js')}}"></script> 
  
  <script>
    $(document).ready(function() {
      $('#specialist').on('change', function() {
        let id = $(this).val();
        $('#doctor').empty();
        $('#doctor').append('<a class="dropdown-item" disabled>Processing...</a>');
        $.ajak({
          type:'GET',
          url:'getdoctor/'+id,
          success: function(response) {
            var response = JSON.parse(response);
            console.log.(response);
            $('#doctor').empty();
            response.forEach(element => {
              $('#doctor').append(
                `<option value="${element['id']}">${element['name']}</option>`
              );
          });
        }
      });
    });
  });
  </script>

  {{-- <script src="{{asset('assets/user/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/user/js/main.js')}}"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script> --}}