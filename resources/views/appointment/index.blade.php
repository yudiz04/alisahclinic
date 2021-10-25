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
    <link rel="stylesheet" href="{{asset('assets/app/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/app/css/style.css')}}">
</head>
<body>
    <div class="main">
        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>Form Janji Temu Pasien</h2>
                <div class="form-group-1">
                    <div class="select-list">
                        <select name="specialist" id="specialist">
                            <option slected value="">Pilih Spesialist</option>
                            <option value="society">Society</option>
                            <option value="language">Language</option>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="doctor" id="doctor">
                            <option slected value="">Pilih Dokter</option>
                            <option value="society">Society</option>
                            <option value="language">Language</option>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="date" id="date">
                            <option slected value="">Pilih Tanggal</option>
                            <option value="society">Society</option>
                            <option value="language">Language</option>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="time" id="time">
                            <option slected value="">Pilih Waktu</option>
                            <option value="society">Society</option>
                            <option value="language">Language</option>
                        </select>
                    </div>
                    <input type="text" name="request" id="request" placeholder="Keluhan" required />
                </div>
                <div class="form-group-2">
                    <h3>Data Pasien</h3>
                    <input type="text" name="name" id="name" placeholder="Nama" required />
                    <input type="text" name="gender" id="gender" placeholder="Jenis Kelamin" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="No HP" required />
                    <div class="select-list">
                        <select name="confirm_type" id="confirm_type">
                            <option seleected value="">By phone</option>
                            <option value="by_email">By email</option>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="hour_appointment" id="hour_appointment">
                            <option seleected value="">Hours : 8am 10pm</option>
                            <option value="9h-11h">Hours : 9am 11pm</option>
                        </select>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>
    <!-- JS -->
    <script src="{{asset('assets/app/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/app/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

@endsection