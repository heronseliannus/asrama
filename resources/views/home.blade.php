<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Telkom CorpU</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="tcu-regular.png" href="images/atcu-regular.png">
    <link rel="shortcut icon" type="image/tcu-regular.png" href="images/telkom.png" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                    <img src="images/tcu-regular.png" width="200" height="100" alt="">
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="#service-page">Info</a></li>
                    <li><a href="#feature-page">Profil</a></li>
                    <li><a href="#blog-page">Galery</a></li>
                    <li><a href="#register">Pendaftaran</a></li>
                    <li><a href="#contact-page">Contact</a></li>
                    <li><a href="/nilai">Cek Nilai</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->



    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2>Center of Excellence</h2>
                    <p>Telkom Corporate University (Telkom CorpU) didefinisikan sebagai  wahana strategis
                       yang dirancang untuk mendukung pencapaian misi perusahaan dengan melakukan
                       kegiatan-kegiatan untuk memperkuat dan  memperkokoh kemampuan belajar individu
                       dan organisasi dalam rangka  membentuk Center of Excellence. Dengan adanya
                       pencanangan program Center  of Excellence dengan Telkom CorpU, maka Telkom
                       melakukan langkah  breakthrough dengan menyempurnakan integrasi sesuai dengan
                       konsep CorpU  yang ideal.</p>
                    <a href="#" class="button white">Watch video</a>
                </div>
                <div class="hidden-xs hidden-sm col-md-4 text-right">
                    <div class="screen-box screen-slider">
                        <div class="item">
                            <img src="images/asro.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/asro2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/asro3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/asro4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/asro5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->



    <!--Feature-area-->
    <section class="gray-bg section-padding" id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/telkom6.jpg" alt="">
                        </div>
                        <br><br><br><br><br><br>
                        <h4>Pelatihan Kepemimpinan</h4>
                        <p>Melalui Telkom Corporate University, Telkom melahirkan leader-leader  masa depan
                            yang berkualitas dan berkelas internasional atau great  leader.
                            </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/telkom2.jpg" alt="">
                        </div>
                        <br><br><br><br><br><br>
                        <h4>Digital Learning</h4>
                        <p>Telkom Digital Learning adalah media pembelajaran elektronik  berbasis web (web-
                            based) yang digunakan dalam proses belajar-mengajar,  baik yang bersifat mandiri
                            maupun wajib.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/telkom3.jpg" alt="">
                        </div>
                        <br><br><br><br><br><br>
                        <h4>Kampiun</h4>
                        <p>Kampiun merupakan media pembelajaran yang berupa knowledge sharing  antar
                            karyawan PT Telkom adalah dengan  artikel operasional sehari-hari mulai dari  penelitian, inovasi, sampai SOP
                            penyelesaian masalah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature-area/-->

    <section class="angle-bg sky-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>PELATIHAN KEPEMIMPINAN</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Melalui Telkom Corporate University, Telkom melahirkan leader-leader  masa depan yang berkualitas dan berkelas internasional atau great  leader</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="#" class="button">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/telkom7.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight">
                                            <img src="images/telkom8.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Digital Learning</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Melalui Telkom Corporate University, Telkom melahirkan leader-leader  masa depan
                                               yang berkualitas dan berkelas internasional atau great  leader</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="#" class="button">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/telkom9.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight">
                                            <img src="images/telkom10.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Business Recommendation</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Selain event pelatihan dan knowledge management, dalam rangka  membantu
                                                perusahaan mencapai visi dan misi yang telah dicanangkan,  Telkom Corpu juga
                                                melakukan kolaborasi dan penelitian yang menghasilkan  Business Recommendation.
                                                Selama tahun 2015, Telkom CorpU berhasil  men-deliver 29 rekomendasi bisnis.</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="#" class="button">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/telkom11.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight">
                                            <img src="images/telkom12.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Achievements</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Telkom telah membuktikan eksistensinya dalam pengelolaan learning  yang ditunjukkan
                                                melalui penghargaan dalam ajang bergengsi tahunan seperti Most Admired Knowledge
                                                Enterprise (MAKE) Study Award dan Global  Council of Corporate Universities (GCCU).</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="#" class="button">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/telkom13.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight">
                                            <img src="images/telkom14.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators caption-indector">
                            <li data-target="#caption_slide" data-slide-to="0" class="active">
                                <strong>Leadership Training </strong>Center of Excellence
                            </li>
                            <li data-target="#caption_slide" data-slide-to="1">
                                <strong>Digital Learning </strong>Center of Excellence
                            </li>
                            <li data-target="#caption_slide" data-slide-to="2">
                                <strong>Business Recommendation </strong>Center of Excellence
                            </li>
                            <li data-target="#caption_slide" data-slide-to="3">
                                <strong>Achievements </strong>Center of Excellence
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="gray-bg section-padding" id="feature-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>SPECIAL FEATURES</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/telkom16.jpg" alt="">
                        </div>
                        <h3>Creative Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/telkom17.jpg" alt="">
                        </div>
                        <h3>Unlimited Features</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/telkom18.jpg" alt="">
                        </div>
                        <h3>Full Free Chat</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/telkom19.jpg" alt="">
                        </div>
                        <h3>Retina ready</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/telkom2.jpg" alt="">
                        </div>
                        <h3>High Resolution</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/telkom21.jpg" alt="">
                        </div>
                        <h3>Clean Codes</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-area section-padding gray-bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Client says</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="testimonials">
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/telkom7.jpg" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/telkom8.jpg" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/telkom13.jpg" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/telkom7.jpg" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/telkom8.jpg" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/telkom13.jpg" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    
    <footer class="footer-area relative sky-bg" id="register">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Register</h2>
                            <p>Input Registrasi Peserta Pelatihan</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Alamat: </strong>Jl. Gegerkalong Hilir No. 47 Kota Bandung, Jawab Barat <br />Indonesia</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">(022) 2016907</a> <br />
                                    <a href="callto:8801687420471">(022) 2017204</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">corporate_comm@telkom.co.id</a> <br />
                                    <a href="mailto:youremail@example.com">example@mail.com</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <form action="/users" class="contact-form" method="post" id="registration-form">
                            @csrf
                            <div class="form-double">
                                <input type="text" id="form-firstname" name="form-firstname" placeholder="First name" class="form-control" required="required">
                                <input type="text" id="form-lastname" name="form-lastname" placeholder="Last name" class="form-control" required="required">
                            </div>
                            <input type="password" id="form-password" name="form-password" class="form-control" placeholder="Password">
                            <input type="text" id="form-nik" name="form-nik" class="form-control" placeholder="NIK">
                            <div class="form-double">
                                <input type="email" id="form-user-email" name="form-user-email" class="form-control" placeholder="email" required="required">
                                <input type="emailtype" id="form-re-email" name="form-re-email" class="form-control" placeholder="Re-enter email" required="required">                                
                            </div>          
                            <input type="text" id="form-phone-num" name="form-phone-number" class="form-control" placeholder="Phone Number">
                            <div class="form-group">
                            <textarea class="form-control" name="form-address" id="form-address" rows="3"placeholder="Address"></textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="select-city" id="select-city">
                                <option value="">Kota...</option>
                                <option value="Ambon">Ambon</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Banjarmasin">Banjarmasin</option>
                                <option value="Bandar Lampung">Bandar Lampung</option>
                                <option value="Banda Aceh">Banda Aceh</option>
                                <option value="bengkulu">Bengkulu</option>
                                <option value="Denpasar">Denpasar</option>
                                <option value="Gorontalo">Gorontalo</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Jayapura">Jayapura</option>
                                <option value="Jambi">Jambi</option>
                                <option value="Kendari">Kendari</option>
                                <option value="Kupang">Kupang</option>
                                <option value="Mamuju">Mamuju</option>
                                <option value="Manado">Manado</option>
                                <option value="Manokowari">Manokowari</option>
                                <option value="Mataram">Mataram</option>
                                <option value="Makasar">Makasar</option>
                                <option value="Medan">Medan</option>
                                <option value="Padang">Padang</option>
                                <option value="Pangkalpinang">Pangkal Pinang</option>
                                <option value="Palu">Palu</option>
                                <option value="Palembang">Palembang</option>
                                <option value="Palangkaraya">Palangkaraya</option>
                                <option value="Pekanbaru">Pekanbaru</option>
                                <option value="Pontianak">Pontianak</option>
                                <option value="Samarinda">Samarinda</option>
                                <option value="Semarang">Semarang</option>
                                <option value="Serang">Serang</option>
                                <option value="Sofifi">Sofifi</option>
                                <option value="Surabaya">Surabaya</option>
                                <option value="Tanjungselor">Tanjungselor</option>
                                <option value="Tanjung Pinang">Tanjung Pinang</option>
                                <option value="Yogyakarta">Yogyakarta</option>                              
                                </select>
                            </div>               
                            <div class="form-group">
                                <select class="form-control" name="select-state" id="select-state">
                                <option value="">Provinsi..</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Provinsi Banten">Banten</option>
                                <option value="DKI Jakarta"> DKI Jakarta</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                <option value="Sulawesi Barat">Sulawesi Barat</option>
                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                <option value="Sulawesi Tengara">Sulawesi Tengara</option>
                                <option value="Sumatra Barat">Sumatra Barat</option>
                                <option value="Sumatra Selatan">Sumatra Selatan</option>
                                <option value="Sumatra Utara">Sumatra Utara</option>
                                <option value="Maluku">Maluku</option>
                                <option value="Maluku Utara">Maluku Utara</option>                                                     
                                <option value="Nusa Tenggara Barat">Nussa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur">Nusa Tengara Timur</option>
                                <option value="Papua">Papua</option>
                                <option value="Papua Barat">Papua Barat</option>
                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                <option value="Jambi">Jambi</option>
                                <option value="Bali">Bali</option>
                                <option value="Lampung">Lampung</option>
                                <option value="Yogyakarta">Yogyakarta</option>
                                <option value="Gorontalo">Gorontalo</option>                 
                                <option value="Bengkulu">Bengkulu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Program">Program Pelatihan Telkom CorpU</label>
                                <select class="form-control" name="select-program" id="select-program">
                                <option value="Pelatihan Kepemimpinan">Pelatihan Kepemimpinan</option>
                                <option value="Pelatihan Digital">Pelatihan Digital Learning</option>
                                <option value="Pelatihan Kampiun">Pelatihan Kampiun</option>
                                </select>
                            </div>                   
                            <div class="form-group">
                                <label for="upload-photo">Upload Photo</label>
                                <input type="file" name="form-photo" id="select-photo" value="image" />
                            </div>
                            <div class="form-group">
                                <label for="gender">Pria</label>
                                <input type="checkbox" aria-label="...">
                                <label for="gender">Wanita</label>
                                <input type="checkbox" aria-label="...">
                            </div>   
                            <label for="date-of-birth">Tanggal dan Tahun Lahir</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <select class="form-control" name="select-date" id="date">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                    </select>                                
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="select-month" id="month">
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>                                
                                </div>
                                <div class="col-md-2">
                                    <input type="text" id="form-date-year" name="form-date-year" placeholder="e.g 1999" class="form-control" required="required">                              
                                </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" aria-label="...">
                                    <label for="">Saya menyetujui Syarat dan Ketentuan</label>
                                </div>                                   
                                
                                <div class="form-group">
                                    <input type="checkbox" aria-label="...">
                                    <label for="">Saya memberikan hak atas data diri Anda untuk situs Anda</label>
                                </div>                                   

                                <div class="form-group">
                                    <input type="checkbox" aria-label="...">
                                    <label for="">Semua data yang telah disi sesuai dengan data dan ketentuan yang berlaku</label>
                                </div>                                    
                                                       
                            <!-- <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea> -->
                            <button type="submit" class="btn btn-success">Registrasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <section class="section-padding gray-bg" id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/telkom16.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Kegiatan Tahunan Telkom CorpU</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nemo eaque expedita aliquid dolorem repellat perferendis, facilis aut fugit, impedit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/telkom17.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Kegiatan Tahunan Telkom CorpU</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nemo eaque expedita aliquid dolorem repellat perferendis, facilis aut fugit, impedit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/telkom18.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Kegiatan Tahunan Telkom CorpU</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Oktober 10, 2018</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nemo eaque expedita aliquid dolorem repellat perferendis, facilis aut fugit, impedit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact with us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Alamat: </strong>Jl. Gegerkalong Hilir No. 47 Kota Bandung, Jawa Barat<br />Indonesia</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">(022) 2016907</a> <br />
                                    <a href="callto:8801687420471">(022) 2017204</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">corporate_comm@telkom.co.id</a> <br />
                                    <a href="mailto:youremail@example.com">example@mail.com</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <form action="/testing" id="contact-us-form" method="post" class="contact-form">
                            @csrf
                            <div class="form-double">
                                <input type="text" id="form-contact-name" name="form-name" placeholder="Your name" class="form-control" required="required">
                                <input type="email" id="form-email" name="form-email" class="form-control" placeholder="E-mail address" required="required">
                            </div>
                            <input type="text" id="form-subject" name="form-subject" class="form-control" placeholder="Message topic">
                            <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea>
                            <button type="submit" class="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id corrupti architecto consequuntur, laborum quaerat sed nemo temporibus unde, beatae vel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>Heronselianus &copy;Copyright 2018 All right resurved.  </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <!--Vendor-JS-->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/contact-form.js')}}"></script>
    <script src="{{ asset('js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{ asset('js/scrollUp.min.js')}}"></script>
    <script src="{{ asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script src="{{ asset('js/testing.js')}}"></script>
    <!--Main-active-JS-->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>
