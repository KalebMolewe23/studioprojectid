<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}"> 
        <link rel="icon" href="{{ asset('assets/logo/logo_only.png') }}" type="image/x-icon">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        <!-- font menu -->
        <link href="https://fonts.cdnfonts.com/css/varuna" rel="stylesheet">

        <!-- boxicons style -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style>
            #preloader{
                background: white;
                height: 100vh;
                width: 100%;
                position: fixed;
                z-index:9999;
            }
            .ring{
                position: absolute;
                width: 200px;
                height: 200px;
                border-radius: 50%;
                animation: ring 2s linear infinite;
            }

            .center{
                display: flex;
                text-align: center;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            @keyframes ring{
                0%{
                    transform: rotate(0deg);
                    box-shadow: 1px 5px 2px #15baef;
                }
                50%{
                    transform: rotate(180deg);
                    box-shadow: 1px 5px 2px #18b201;
                }
                100%{
                    transform: rotate(360deg);
                    box-shadow: 1px 5px 2px #0456c8;
                }
            }

            .ring:before{
                position: absolute;
                content: '';
                left: 0;
                top: 0;
                height: 100%;
                width: 100%;
                border-radius: 50%;
                box-shadow: 0 0 5px #15baef;
            }
        </style>
    </head>

    </body class="vh-100 overflow-hidden">
        <!-- Loading website -->
        <div id="preloader">
            <div class="center">
                <div class="ring"></div>
                <span><img style="width: 200px;margin-top:100px" src="{{ asset('assets/logo/logo_with_text.png') }}" alt=""></span>
            </div>
        </div>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="#">
                    <img style="width: 20px;margin-top:-1px" src="{{ asset('assets/logo/logo_only.png') }}" alt=""> <span style="color:#50C878">TUDIOprojectid</span>
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            <img style="width: 100px;" src="{{ asset('assets/logo/logo2.png') }}" alt="">
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a style="color:#50C878" class="nav-link mx-lg-2 active" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:#50C878" class="nav-link mx-lg-2" href="#"><i class="fas fa-kaaba"></i> About</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:#50C878" class="nav-link mx-lg-2" href="#"><i class="far fa-newspaper"></i> Service</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:#50C878" class="nav-link mx-lg-2" href="#"><i class="fas fa-th-large"></i> Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="https://api.whatsapp.com/send/?phone=6285960296108&text&type=phone_number&app_absent=0"><button class="btn btn-success"><i class='bx bxl-whatsapp'></i> Konsultasi Sekarang!</button></a>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- end navbar -->

        <section class="home">
            <div class="home-content">
                <div class="row">
                    <div class="col" data-aos="fade-left">
                        <h1><strong>Selamat Datang</strong></h1>
                        <p>Di StudioProjectID</p><br>
                        <h5>Keunggulan Kami</h5><hr style="width:300px;border: 0;border-top: 2px solid #fff;">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('assets/image_content/kerja_sama.png') }}" width="80px">
                            </div>
                            <div class="col-9">
                                <p style="margin-top:25px;">100% Terpecaya</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('assets/image_content/team.png') }}" width="80px">
                            </div>
                            <div class="col-9">
                                <p style="margin-top:25px;">Tim Profesional</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('assets/image_content/bergaransi.png') }}" width="80px">
                            </div>
                            <div class="col-9">
                            <p style="margin-top:25px;">Bergaransi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/image_content/laptop.png') }}" width="650px">
                    </div>
                    <div class="col" data-aos="fade-right">
                        <h1>Jasa Pengembangan Maupun Pembuatan Website & Android</h1><br>
                        <p>Perkenalkan, Kami Dari Tim StudioProjectID Menawarkan Kalian Untuk Jasa Dalam Pembuatan, Pengembangan, Dan Custome Website Maupun Android, Sesuai Dengan Kebutuhan Anda.</p>
                        <p><strong>Wujudkan Sistem Impian Kalian Bersama Kami, Kami Siap Membantu Untuk Mewujudkannya.</strong></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container" style="margin-top: 200px">
            <div class="row">
                <div class="col" data-aos="fade-up">
                    <div class="card" style="padding:20px;background-color:#f4f4f4">
                        <center>
                            <img src="{{ asset('assets/image_content/customer_care.png') }}" width="100px"><br><br>
                            <h4 style="color:#880808">Customer Care</h4><br>
                            <p style="font-family: 'Roboto Slab', sans-serif;">Kami siap membantu untuk mewujudkan sistem sesuai dengan ekspetasi anda, dalam membangun website ataupun android. 100% tanggung jawab kami sampai selesai.</p>
                        </center>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
                    <div class="card" style="padding:20px;background-color:#f4f4f4">
                        <center>
                            <img src="{{ asset('assets/image_content/web_design.png') }}" width="120px"><br><br>
                            <h4 style="color:#880808">Full Design & Development</h4><br>
                            <p style="font-family: 'Roboto Slab', sans-serif;">Sampaikan ide dan konsep kalian untuk kebutuhan sistem yang akan dibangun. Pastikan semua ide anda sudah kalian berikan, agar sistem sesuai dengan apa yang kalian inginkan.</h6>
                        </center>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
                    <div class="card" style="padding:20px;background-color:#f4f4f4">
                        <center>
                            <img src="{{ asset('assets/image_content/warranty.png') }}" width="110px"><br><br>
                            <h4 style="color:#880808">Full Warranty</h4><br>
                            <p style="font-family: 'Roboto Slab', sans-serif;">Full garansi, apabila tidak sesuai dengan perjanjian diawal. Maka uang akan dikembalikan 100%. Agar silaturahmi tidak putus, mari kita saling berkerja sama untuk sistem yang kalian inginkan.</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 200px" data-aos="fade-up">

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
                            <small>(Free Konsultasi)</small><br><br>
                            <img src="{{ asset('assets/image_content/student.png') }}" width="80px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5 style="text-decoration: line-through;">Rp1.500k/projek</h5>
                            <h4 style="color:red"><strong>Rp1.299K/projek</strong></h4><br>
                            <div id="app">
                                <home-component></home-component>
                            </div>
                            @vite('resources/js/app.js')
                            
                            <hr style="width:380px;border: 0;border-top: 2px solid black;"><br>
                        </center>
                        <div class="container">
                            <h5>Fitur Unggulan</h5>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Konsultasi.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Free konsultasi untuk konsep sebelum pembuatan sistem
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Training.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Free training untuk memahami isi dari semu fitur yang ada didalam sistem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Revisi Tampilan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Free revisi tampilan sebanyak 3x untuk semua tampilan yang ada disistem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bxs-x-circle' style="color:red"></i> Free Hosting 1 Bulan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Mendapatkan hosting selama 1 bulan. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bxs-x-circle' style="color:red"></i> Free Domain 1 Bulan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Mendapatkan domain selama 1 bulan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> SC Untuk Client.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Source code 100% milik client.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Pengerjaan < 1 Bulan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Pengerjaan pembuatan sistem paling lama kurang lebih 1 bulan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> 100% Pengembalian.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            100% pengembalian dana apabila sistem belum digunakan atau tidak sesuai dengan perjanjian.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bxs-x-circle' style="color:red"></i> Perawatan 6 Bulan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Kami menyediakan layanan untuk maintance/perawatan website selama 6 bulan kedepan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background-color:#AFEEEE">
                        <br>
                        <center>
                            <h5><strong>Bisnis Premium</strong></h5>
                            <small>(UMKM, Company Profile)</small><br><br>
                            <img src="{{ asset('assets/image_content/little_business.png') }}" width="80px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5 style="text-decoration: line-through;">Rp3.000K/projek</h5>
                            <h4 style="color:red"><strong>Rp2.499K/projek</strong></h4><br>
                            <button class="btn btn-success">Tawarkan Sekarang</button><hr style="width:380px;border: 0;border-top: 2px solid black;"><br>
                        </center>
                        <div class="container">
                            <h5>Fitur Unggulan</h5>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Konsultasi.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Free konsultasi untuk konsep sebelum pembuatan sistem
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Training.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Free training untuk memahami isi dari semu fitur yang ada didalam sistem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Revisi Tampilan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Free revisi tampilan sebanyak 3x untuk semua tampilan yang ada disistem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Hosting 1 Bulan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Mendapatkan hosting selama 1 bulan. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Domain 1 Bulan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Mendapatkan domain selama 1 bulan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> SC Untuk Client.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Source code 100% milik client.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Pengerjaan < 1 Bulan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Pengerjaan pembuatan sistem paling lama kurang lebih 1 bulan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> 100% Pengembalian.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            100% pengembalian dana apabila sistem belum digunakan atau tidak sesuai dengan perjanjian.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Perawatan 6 Bulan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Kami menyediakan layanan untuk maintance/perawatan website selama 6 bulan kedepan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="margin-top: 5.5px;">
                        <br>
                        <center>
                            <h5><strong>Bisnis Diamond</strong></h5>
                            <small>(PT, CV)</small><br><br>
                            <img src="{{ asset('assets/image_content/apertment.png') }}" width="90px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5 style="text-decoration: line-through;">Rp.6.000K/projek</h5>
                            <h4 style="color:red"><strong>Rp5.799K/projek</strong></h4><br>
                            <button class="btn btn-success">Tawarkan Sekarang</button><hr style="width:380px;border: 0;border-top: 2px solid black;"><br>
                        </center>
                        <div class="container">
                            <h5>Fitur Unggulan</h5>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Konsultasi.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Free konsultasi untuk konsep sebelum pembuatan sistem
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Training.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Free training untuk memahami isi dari semu fitur yang ada didalam sistem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Revisi Tampilan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Free revisi tampilan sebanyak 3x untuk semua tampilan yang ada disistem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Hosting 1 Tahun.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Mendapatkan hosting selama 1 tahun. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Free Domain 1 Tahun.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Mendapatkan domain selama 1 tahun.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> SC Untuk Client.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Source code 100% milik client.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Pengerjaan 1 - 2 Bulan.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Pengerjaan pembuatan sistem paling lama kurang lebih 1 - 2 bulan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> 100% Pengembalian.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            100% pengembalian dana apabila sistem belum digunakan atau tidak sesuai dengan perjanjian.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class='bx bx-check' style="color:#50c878;"></i> Perawatan 1 Tahun.
                                </div>
                                <div class="col">
                                    <div class="icon-container">
                                        <i class='bx bxs-help-circle'></i>
                                        <div class="popup" id="popup">
                                            Kami menyediakan layanan untuk maintance/perawatan website selama 1 tahun kedepan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="898e7672-5dbc-405d-ad77-c436054c8a35";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script type="text/javascript">
            $(function() {
                $(document).scroll(function () {
                    var $nav = $(".fixed-top");
                    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
                });    
            });
        </script>
        <script>
            var loader = document.getElementById("preloader");

            window.addEventListener("load", function(){
                loader.style.display = "none";
            })

            AOS.init({
                duration: 1500
            });
        </script>
    </body>
</html>