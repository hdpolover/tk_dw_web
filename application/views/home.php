<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Website Title -->
    <title>Evolo - StartUp HTML Landing Page Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/fontawesome-all.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/swiper.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/magnific-popup.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url('assets/img/logotk.png'); ?>">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">


                <h4>
                    <li> <?php echo anchor('auth', 'login'); ?></li>
                </h4>



            </ul>
        </div>
        <!--/.nav-collapse -->
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->

        <a href="<?php echo site_url('user') ?>"> <img src="<?php echo base_url('assets/img/logotk.png') ?>" width="110" height="110"></a>
        <a>
            <h3> DHARMAWANITA 91
                <br> PESANGGARAN
            </h3>
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>

        <!-- end of mobile menu toggle button -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise"></span>PENERIMAAN PESERTA DIDIK BARU TA 2021/2022</h1>
                            <p class="p-large">CERDAS, CERIA, DAN BERAKHLAK MULIA</p>
                            <a class="btn-solid-lg page-scroll" href="<?php echo base_url('pendaftaran') ?>">DAFTARKAN SEKARANG </a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="<?php echo base_url('assets/img/6.png');?>" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Customers -->


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>TERAKREDITASI B</h2>
                    <p class="p-heading p-large">Tk Dharmawanita 91 Pesanggaran adalah pendidikan taman kanak-kanak dibawah yayasanan Dharmawanita. Tk Dharmawanita 91 Pesanggaran mendidik anak agar Cerdas, Ceria, dan Berakhlak Mulia.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="<?php echo base_url('assets/img/Vector-5.png');?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Profil Sekolah</h4>
                            <p>Our team of enthusiastic marketers will analyse and evaluate how your company stacks against the closest competitors</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="<?php echo base_url('assets/img/Vector-3.png');?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Guru Pengajar</h4>
                            <p>Once the market analysis process is completed our staff will search for opportunities that are in reach</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="<?php echo base_url('assets/img/Vector-4.png');?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Panduan Pendaftaran</h4>
                            <p>With all the information in place you will be presented with an action plan that your company needs to follow</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->


    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
    <div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo base_url('assets/img/details-lightbox-1.svg');?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Design And Plan</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
    <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo base_url('assets/img/details-lightbox-2.svg');?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Search To Optimize</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->


    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>FASILITAS DAN KEGIATAN</h2>
                    <p class="p-heading p-large">Fa </p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">FASILITAS</div>
                            <div class="card-subtitle"></div>
                            <hr class="cell-divide-hr">
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">PLAYGROUND</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">RUANG BELAJAR</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">RUANG BERMAIN</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">AULA</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="<?php echo site_url("user/Cart/form_cart/starter") ?>">LIHAT</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">KEGIATAN</div>
                            <div class="card-subtitle"></div>
                            <hr class="cell-divide-hr">

                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body"></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body"></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body"></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i>
                                    <div class="media-body"></div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="<?php echo site_url("user/Cart/form_cart/medium") ?>">LIHAT</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="label">
                            <p class="best-value"></p>
                        </div>
                        <div class="card-body">
                            <div class="card-title">PRESTASI SISWA</div>
                            <div class="card-subtitle"></div>
                            <hr class="cell-divide-hr">

                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body"></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body"></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body"></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body"></div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="<?php echo site_url("user/Cart/form_cart/complete") ?>">LIHAT</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About Evolo</h4>
                        <p>We're passionate about offering some of the best business growth services for startups</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?= base_url('assets/'); ?>js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?= base_url('assets/'); ?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?= base_url('assets/'); ?>js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>