<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>

    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/css1/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aws/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css1/style.css') }}">
</head>

<body>
    <header>
        <section id="topbar">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-lg-7 icon text-end">
                        <i class="fab fa-facebook-f pe-3"></i>
                        <i class="fab fa-twitter pe-3"></i>
                        <i class="fab fa-instagram-square pe-3"></i>

                    </div>
                </div>
            </div>
        </section>
        <section id="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Klinik Alisah</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                                <a class="nav-link" href="#">Dokter</a>
                                <a class="nav-link" href="#">Fasilitas</a>
                                <a class="nav-link" href="#">Form</a>
                                <a class="nav-link" href="#">Artikel</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>
    <section id="banner">
        <div class="container" style="background-image: url('assets/images/bg-01.jpg');">
        </div>
    </section>
    <section>
        <div class="container">
            <div class="form mt-5">
                <div class="row">
                    <div class="col-lg-4">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Pilih Spesialis</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Pilih Dokter</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-primary btn-sm" aria-label=".form-select-sm example">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>

</body>

</html>
