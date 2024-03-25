<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}"> 
        <link rel="icon" href="{{ asset('assets/logo/favicon.png') }}" type="image/x-icon">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                <span><img style="width: 300px;" src="{{ asset('assets/logo/logo.png') }}" alt=""></span>
            </div>
        </div>
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
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="{{ asset('assets/logo/logo2.png') }}" style="width:250px;"></h5>
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

        <div class="container" style="margin-top: 100px">

            <div class="row">
                <div class="col" data-aos="fade-left">
                    <h1 class="gradient-text"><strong>Selamat Datang</strong></h1>
                    <p>Di StudioProjectID</p><br>
                    <h5>Keunggulan Kami</h5><hr style="width:300px;border: 0;border-top: 2px solid #000;">
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
                    <h3>Jasa Pengembangan Maupun Pembuatan Website & Android</h3><br>
                    <p>Perkenalkan, Kami Dari Tim StudioProjectID Menawarkan Kalian Untuk Jasa Dalam Pembuatan, Pengembangan, Dan Custome Website Maupun Android, Sesuai Dengan Kebutuhan Anda.</p>
                    <p style="color:#880808"><strong>Wujudkan Sistem Impian Kalian Bersama Kami, Kami Siap Membantu Untuk Mewujudkannya.</strong></p>
                </div>
            </div>

        </div>

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
                            <small>(UMKM, Company Profile)</small><br><br>
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
                            <small>(PT, CV)</small><br><br>
                            <img src="{{ asset('assets/image_content/apertment.png') }}" width="90px"><br><br>
                            <small>Mulai Dari Harga</small>
                            <h5>Rp. 5.000.000/projek</h5><br>
                            <button class="btn btn-success">Pesan Sekarang</button>
                        </center>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" style="margin-top: 200px" data-aos="fade-up">
            <div class="card" style="padding:20px;background-color:#AFEEEE;background-image: url({{ asset('assets/image_content/bg_card.png') }});"><br>
                <center>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('assets/image_content/experience.png') }}" width="100px"><br><br>
                            <h3 style="color:#880808;"><strong>3</strong></h3>
                            <h5>Years Experience</h5>
                        </div>
                        <div class="col">
                            <img src="{{ asset('assets/image_content/our_team.png') }}" width="120px"><br><br>
                            <h3 style="color:#880808;"><strong>5</strong></h3>
                            <h5>Programmers</h5>
                        </div>
                        <div class="col">
                            <img src="{{ asset('assets/image_content/client.png') }}" width="136px"><br><br>
                            <h3 style="color:#880808;"><strong>15</strong></h3>
                            <h5>Total Clients</h5>
                        </div>
                    </div>
                </center><br>
            </div>
        </div>
        
        <div class="container" style="margin-top: 200px" data-aos="fade-up">
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
                            <small>(Free Konsultasi)</small><br><br>
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
                            <small>(UMKM, Company Profile)</small><br><br>
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
                            <small>(PT, CV)</small><br><br>
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

        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="898e7672-5dbc-405d-ad77-c436054c8a35";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
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