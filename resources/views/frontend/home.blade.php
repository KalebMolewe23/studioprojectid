<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}"> 
        <link rel="icon" href="{{ asset('assets/logo/favicon.png') }}" type="image/x-icon">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    </body class="vh-100 overflow-hidden">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#"><img src="{{ asset('assets/logo/logo2.png') }}" style="width:250px;"></a>
                
                <!-- Toggle Btn -->
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- SideBar -->
                <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    
                    <!-- SideBar Header -->
                    <div class="offcanvas-header text-black border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    
                    <!-- SideBar Body -->
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 20px">
            <center>
                <h3><strong>Silahkan Pilih Paket Website Anda</strong></h3>
                <p>Pilih paket sesuai dengan kebutuhan anda</p>
            </center><br>
            <div class="row">
                <div class="col">
                    <div class="card" style="margin-top: 5.5px;">
                        <br>
                        <center>
                            <h5><strong>Mahasiswa</strong></h5>
                            <small>(Free Konsultasi)</small><br>
                            <img src="{{ asset('assets/image_content/student.png') }}" width="80px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5>Rp. 2.000.000/projek</h5><br>
                            <button class="btn btn-success">Pesan Sekarang</button>
                        </center>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <!-- <div class="label_packet">
                        <center>
                            <p style="padding:5px"><strong>Recomended</strong></p>
                        </center>
                    </div> -->
                    <div class="card" style="background-color:#AFEEEE">
                        <br>
                        <center>
                            <h5><strong>Bisnis Premium</strong></h5>
                            <small>(UMKM, Company Profile)</small><br>
                            <img src="{{ asset('assets/image_content/little_business.png') }}" width="80px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5>Rp. 3.000.000/projek</h5><br>
                            <button class="btn btn-success">Pesan Sekarang</button>
                        </center>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="margin-top: 5.5px;">
                        <br>
                        <center>
                            <h5><strong>Bisnis Diamond</strong></h5>
                            <small>(PT, CV)</small><br>
                            <img src="{{ asset('assets/image_content/apertment.png') }}" width="90px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5>Rp. 5.000.000/projek</h5><br>
                            <button class="btn btn-success">Pesan Sekarang</button>
                        </center>
                        <br>
                    </div>
                </div>
            </div><br>
            <center>
                <h3><strong>Silahkan Pilih Paket Android Anda</strong></h3>
                <p>Pilih paket sesuai dengan kebutuhan anda</p>
            </center><br>
            <div class="row">
                <div class="col">
                    <div class="card" style="margin-top: 5.5px;">
                        <br>
                        <center>
                            <h5><strong>Mahasiswa</strong></h5>
                            <small>(Free Konsultasi)</small><br>
                            <img src="{{ asset('assets/image_content/student.png') }}" width="80px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5>Rp. 4.000.000/projek</h5><br>
                            <button class="btn btn-success">Pesan Sekarang</button>
                        </center>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <!-- <div class="label_packet_2">
                        <center>
                            <p style="padding:5px"><strong>Recomended</strong></p>
                        </center>
                    </div> -->
                    <div class="card" style="background-color:#AFEEEE">
                        <br>
                        <center>
                            <h5><strong>Bisnis Premium</strong></h5>
                            <small>(UMKM, Company Profile)</small><br>
                            <img src="{{ asset('assets/image_content/little_business.png') }}" width="80px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5>Rp. 6.000.000/projek</h5><br>
                            <button class="btn btn-success">Pesan Sekarang</button>
                        </center>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="margin-top: 5.5px;">
                        <br>
                        <center>
                            <h5><strong>Bisnis Diamond</strong></h5>
                            <small>(PT, CV)</small><br>
                            <img src="{{ asset('assets/image_content/apertment.png') }}" width="90px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5>Rp. 10.000.000/projek</h5><br>
                            <button class="btn btn-success">Pesan Sekarang</button>
                        </center>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>