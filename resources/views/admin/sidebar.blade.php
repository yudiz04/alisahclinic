<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{('assets/img/sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{url('/home')}}" class="simple-text logo-normal">
        ALISAH CLINIC
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active  ">
          <a class="nav-link" href="{{url('/home')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('/specialist')}}">
            <i class="fas fa-stethoscope"></i>
            <p>Specialist</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('/doctor')}}">
            <i class="fas fa-user-md"></i>
            <p>Doctor</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('/facility')}}">
            <i class="fas fa-hospital"></i>
            <p>Facility</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('/article')}}">
            <i class="material-icons">library_books</i>
            <p>Article</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('/app')}}">
            <i class="fas fa-file-medical"></i>
            <p>Appoinment</p>
          </a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Appointment
            <i class="material-icons">notifications</i>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('/appointment')}}">Form</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
