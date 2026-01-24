<!DOCTYPE html>
<html lang="id">

<head>
    <title>Produk & Brand - PT. Triglobalindo Berkat Utama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* --- CUSTOM TBU THEME --- */
        :root {
            --brand-dark-blue: #153E80;
            --brand-blue: #2556A6;
            --brand-light-blue: #3D76D4;
            --brand-white: #FBFBF3;
            --text-color: #333333;
        }

        body {
            font-family: 'Inter', 'Helvetica', 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content-wrapper {
            flex: 1;
        }

        /* --- NAVBAR STYLES (Konsisten) --- */
        /* --- NAVBAR STYLES (DIPERBAIKI) --- */
        #ftco-navbar {
            background: transparent !important;
            position: fixed;
            top: 0;
            z-index: 1030;
            width: 100%;
            padding: 0;
            overflow: visible !important;
            /* PENTING: Agar dropdown tidak terpotong */
        }

        .navbar-full-width {
            width: 100%;
            padding-left: 5%;
            padding-right: 5%;
            background: #153E80;
            transition: background 0.4s ease, padding 0.4s ease, box-shadow 0.4s ease;
            box-shadow: none;
            padding-top: 5px;
            padding-bottom: 5px;
            position: relative;
            /* PENTING: Untuk stacking context */
            z-index: 1031;
            /* PENTING: Agar selalu di atas */
        }

        #ftco-navbar.scrolled-nav .navbar-full-width {
            background: rgba(37, 86, 166, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .navbar-collapse {
            overflow: visible !important;
            /* PENTING */
        }

        .dropdown-menu {
            border-top: 3px solid var(--brand-light-blue);
            background-color: #ffffff;
            border-radius: 0 0 4px 4px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: none;
            padding: 0;
            min-width: 220px;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 99999 !important;
            /* PENTING: Agar dropdown di atas segalanya */
            display: block;
            visibility: hidden;
            /* Animasi hidden */
            opacity: 0;
            /* Animasi transparan */
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .dropdown-menu.show {
            visibility: visible;
            /* Munculkan saat ada class show */
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown-item {
            color: var(--text-color);
            padding: 12px 20px;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.2s;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: var(--brand-dark-blue);
            padding-left: 25px;
        }

        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            font-weight: 500 !important;
            font-size: 14px;
            padding: 25px 15px;
            /* Padding disesuaikan agar rapi */
            position: relative;
            transition: color 0.3s ease;
        }

        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link:hover,
        .ftco-navbar-light .navbar-nav>.nav-item.active>.nav-link {
            color: #ffffff !important;
        }

        .navbar-brand-custom {
            display: flex;
            align-items: center;
            text-decoration: none !important;
            padding: 10px 0;
        }

        .logo-box-nav {
            width: 45px;
            height: 45px;
            background: #ffffff;
            color: var(--brand-dark-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            border-radius: 4px;
            margin-right: 12px;
            font-size: 16px;
        }

        .logo-text-nav {
            display: flex;
            flex-direction: column;
            line-height: 1.1;
        }

        .logo-title {
            font-size: 18px;
            font-weight: 700;
            color: #ffffff;
        }

        .logo-subtitle {
            font-size: 11px;
            letter-spacing: 1px;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
        }

        .nav-cta-btn {
            background-color: var(--brand-light-blue) !important;
            color: #ffffff !important;
            border-radius: 4px;
            padding: 8px 25px !important;
            border: 1px solid var(--brand-light-blue);
            transition: all 0.3s;
            margin-left: 15px;
            /* Pastikan margin ada */
        }

        .nav-cta-btn:hover {
            background-color: transparent !important;
            border: 1px solid #ffffff;
        }

        .navbar-toggler .fa-bars {
            color: #ffffff !important;
            font-size: 24px;
        }

        .top {
            background-color: #fff;
            font-size: 13px;
        }

        @media (max-width: 991.98px) {
            .navbar-full-width {
                padding-left: 15px;
                padding-right: 15px;
            }

            .nav-cta-btn {
                margin-left: 0;
                margin-top: 10px;
                display: inline-block;
            }

            .dropdown-menu {
                position: static;
                background: rgba(255, 255, 255, 0.05);
                display: none;
            }

            .dropdown-menu.show {
                display: block;
            }

            .dropdown-item {
                color: #fff;
            }
        }

        /* --- PRODUCT PAGE STYLES --- */

        .hero-wrap-2 {
            height: 400px;
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .hero-wrap-2 .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(21, 62, 128, 0.9);
        }

        .hero-wrap-2 .slider-text {
            height: 400px;
        }

        /* Product Card Design */
        .product-card {
            background: #fff;
            border-radius: 12px;
            padding: 40px 30px;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            top: 0;
            border: 1px solid #f0f0f0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .product-card:hover {
            top: -10px;
            box-shadow: 0 20px 40px rgba(21, 62, 128, 0.12);
            border-color: transparent;
        }

        .logo-wrapper {
            height: 100px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            position: relative;
        }

        /* Garis dekorasi di bawah logo */
        .logo-wrapper::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 3px;
            background-color: #e0e0e0;
            transition: 0.4s;
        }

        .product-card:hover .logo-wrapper::after {
            width: 80px;
            background-color: var(--brand-light-blue);
        }

        .brand-logo-img {
            max-height: 80px;
            max-width: 100%;
            width: auto;
            transition: 0.4s;
            filter: grayscale(100%);
            opacity: 0.7;
        }

        .product-card:hover .brand-logo-img {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.05);
        }

        .product-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--brand-dark-blue);
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .product-desc {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Intro Text */
        .intro-text {
            max-width: 700px;
            margin: 0 auto;
            color: #555;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <div class="py-2 top border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
                    <p class="mb-0 w-100">
                        <span class="fas fa-envelope mr-2" style="color: var(--brand-dark-blue);"></span>
                        <span class="text">tbugrup@gmail.com</span>
                        <span class="fab fa-instagram ml-3 mr-2" style="color: var(--brand-dark-blue);"></span>
                        <a href="https://instagram.com/triglobalindo.id" target="_blank" class="text"
                            style="color: inherit;">@triglobalindo.id</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                    <p class="mb-0 register-link">
                        <a href="https://wa.me/6281218087689" class="btn btn-sm px-3" target="_blank"
                            style="background-color: var(--brand-light-blue); color: #fff; font-weight: 600;">
                            <i class="fab fa-whatsapp mr-1"></i> Hubungi Kami
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid px-lg-5 navbar-full-width">
            <a class="navbar-brand-custom" href="/">
                <div class="logo-box-nav">TBU</div>
                <div class="logo-text-nav">
                    <span class="logo-title">PT. TRIGLOBALINDO</span>
                    <span class="logo-subtitle">General Contractor</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" role="button"
                            data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="/about/profile-perusahaan">Profile Perusahaan</a>
                            <a class="dropdown-item" href="/about/visi-misi">Vision & Mission</a>
                            <a class="dropdown-item" href="/about/tim-kami">Tim Kami</a>
                            <a class="dropdown-item" href="/about/legalitas">Legalitas & Sertifikasi</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="/project" class="nav-link">Projects</a></li>
                    <li class="nav-item active"><a href="/products" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link nav-cta-btn text-center">Get a Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">

        <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_products.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <h1 class="mb-2 bread" style="color: #fff; font-weight: 800;">Produk & Brand</h1>
                        <p class="breadcrumbs text-white-50">
                            <span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right ml-2"
                                        style="font-size: 10px;"></i></a></span>
                            <span>Products</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section pb-4">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-10 heading-section ftco-animate">
                        <span class="subheading"
                            style="color: var(--brand-blue); letter-spacing: 2px; text-transform: uppercase; font-weight: 600;">Mitra
                            Resmi</span>
                        <h2 class="mb-4" style="color: var(--brand-dark-blue); font-weight: 700;">Kualitas Terbaik
                            untuk Proyek Anda</h2>
                        <p class="intro-text">
                            PT. Triglobalindo Berkat Utama bekerjasama dan mensuplai produk dari merek-merek global
                            terkemuka. Kami menjamin keaslian, kualitas, dan dukungan teknis untuk setiap produk yang
                            kami sediakan dalam proyek konstruksi dan industri Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pt">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 d-flex align-items-stretch mb-4 ftco-animate">
                        <div class="product-card w-100">
                            <div class="logo-wrapper">
                                <img src="{{ asset('images/LOGO PARTNERSUPLIER - (Zwick_Roell).png') }}"
                                    alt="Zwick Roell" class="brand-logo-img">
                            </div>
                            <h3 class="product-title">Zwick Roell</h3>
                            <p class="product-desc">
                                Pemimpin global dalam sistem pengujian material statis dan sistem pengujian fatik
                                (fatigue testing systems). Menawarkan presisi Jerman untuk jaminan kualitas material
                                industri Anda.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch mb-4 ftco-animate">
                        <div class="product-card w-100">
                            <div class="logo-wrapper">
                                <img src="{{ asset('images/LOGO PARTNERSUPLIER - (GREE).png') }}" alt="Gree"
                                    class="brand-logo-img">
                            </div>
                            <h3 class="product-title">Gree</h3>
                            <p class="product-desc">
                                Produsen pendingin udara (AC) terbesar di dunia. Kami menyediakan solusi HVAC yang
                                efisien, ramah lingkungan, dan tahan lama untuk kebutuhan komersial maupun industrial.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch mb-4 ftco-animate">
                        <div class="product-card w-100">
                            <div class="logo-wrapper">
                                <img src="{{ asset('images/LOGO PARTNERSUPLIER - (Panasonic).png') }}"
                                    alt="Panasonic" class="brand-logo-img">
                            </div>
                            <h3 class="product-title">Panasonic</h3>
                            <p class="product-desc">
                                Brand elektronik terpercaya dengan solusi tata udara, kelistrikan, dan peralatan gedung.
                                Dikenal dengan durabilitas tinggi dan teknologi nanoe™ X untuk kualitas udara yang lebih
                                baik.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch mb-4 ftco-animate ml-md-auto">
                        <div class="product-card w-100">
                            <div class="logo-wrapper">
                                <img src="{{ asset('images/LOGO PARTNERSUPLIER -(Saerindo).png') }}" alt="Saerindo"
                                    class="brand-logo-img">
                            </div>
                            <h3 class="product-title">Saerindo</h3>
                            <p class="product-desc">
                                Mitra terpercaya untuk kebutuhan kabel dan komponen elektrikal. Menyediakan produk
                                standar nasional dan internasional untuk keamanan instalasi listrik proyek Anda.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch mb-4 ftco-animate mr-md-auto">
                        <div class="product-card w-100">
                            <div class="logo-wrapper">
                                <img src="{{ asset('images/LOGO PARTNERSUPLIER - (TKE ELEVATOR).png') }}"
                                    alt="TKE Elevator" class="brand-logo-img">
                            </div>
                            <h3 class="product-title">TKE Elevator</h3>
                            <p class="product-desc">
                                Sebelumnya ThyssenKrupp Elevator. Menyediakan solusi mobilitas vertikal (lift dan
                                eskalator) dengan teknologi engineering Jerman yang aman, nyaman, dan efisien.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5" style="background-color: var(--brand-dark-blue);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                        <h3 class="text-white font-weight-bold mb-2">Butuh Penawaran Produk?</h3>
                        <p class="text-white-50 mb-0">Konsultasikan kebutuhan spesifikasi teknis dan ketersediaan stok
                            dengan tim kami.</p>
                    </div>
                    <div class="col-md-4 text-center text-md-right">
                        <a href="/contact" class="btn btn-white py-3 px-5"
                            style="border-radius: 50px; font-weight: 700; color: var(--brand-dark-blue);">Hubungi
                            Kami</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <footer class="ftco-footer text-white" style="background-color: #0d2a55;">
        <div class="container mb-5 pb-4 pt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 d-flex align-items-center text-white" style="font-weight: 700;">TBU
                        </h2>
                        <p style="color: rgba(255,255,255,0.7);">PT. Triglobalindo Berkat Utama. General Contractor,
                            Supplier & Fabrication delivering excellence since 2014.</p>

                        <ul class="ftco-footer-social list-unstyled mt-4">
                            <li>
                                <a href="https://instagram.com/triglobalindo.id" target="_blank" title="Instagram">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/6281218087689" target="_blank" title="WhatsApp">
                                    <span class="fab fa-whatsapp"></span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:tbugrup@gmail.com" title="Email">
                                    <span class="fas fa-envelope"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2 text-white">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="/" class="py-2 d-block text-white-50">Home</a></li>
                            <li><a href="/about" class="py-2 d-block text-white-50">About Us</a></li>
                            <li><a href="/services" class="py-2 d-block text-white-50">Services</a></li>
                            <li><a href="/project" class="py-2 d-block text-white-50">Projects</a></li>
                            <li><a href="/contact" class="py-2 d-block text-white-50">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 text-white">Contact Info</h2>
                        <div class="map-container mb-4"
                            style="border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.3);">
                            <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9080680438046!2d106.97074007481041!3d-6.275817061433529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d0058e5e349%3A0xbc1aa63753554454!2sPT%20Triglobalindo%20Berkat%20Utama!5e0!3m2!1sid!2sid!4v1769259512104!5m2!1sid!2sid">
                            </iframe>
                        </div>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fas fa-map-marker-alt"></span><span class="text">Ruko Grand
                                        Galaxy City, Jl. Pulo Sirih Barat Raya Blok RSN No.68, Jaka Setia, Bekasi
                                        Selatan.</span></li>
                                <li><a href="tel:081218087689"><span class="icon fas fa-phone"></span><span
                                            class="text">0812-1808-7689</span></a></li>
                                <li><a href="mailto:tbugrup@gmail.com"><span class="icon fas fa-envelope"></span><span
                                            class="text">tbugrup@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: #081d3b;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center py-3">
                        <p class="mb-0 text-white-50" style="font-size: 12px;">Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | PT. Triglobalindo Berkat Utama
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 50) {
                    $('#ftco-navbar').addClass('scrolled-nav');
                } else {
                    $('#ftco-navbar').removeClass('scrolled-nav');
                }
            });

            if ($(window).width() > 991) {
                $('.navbar .dropdown').hover(function() {
                    $(this).addClass('show');
                    $(this).find('.dropdown-menu').addClass('show');
                }, function() {
                    $(this).removeClass('show');
                    $(this).find('.dropdown-menu').removeClass('show');
                });
            }
        });
    </script>
</body>

</html>
