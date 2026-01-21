<!DOCTYPE html>
<html lang="id">

<head>
    <title>Legalitas & Sertifikasi - PT. Triglobalindo Berkat Utama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        /* --- TBU THEME VARIABLES --- */
        :root {
            --brand-dark-blue: #153E80;
            --brand-blue: #2556A6;
            --brand-light-blue: #3D76D4;
            --brand-white: #FBFBF3;
            --text-color: #333333;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--brand-white);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- PENGATURAN SPACING (MARGIN/PADDING) --- */

        /* 1. Mengurangi Tinggi Banner Hero Sub-Page */
        .hero-wrap-2 {
            height: 350px;
            /* Dikurangi dari 500px */
            position: relative;
            background-size: cover;
            background-position: center;
        }

        /* 2. Mengurangi Jarak Atas Bawah Setiap Section */
        .ftco-section {
            padding: 3rem 0;
            /* Standar template biasanya 6rem/7rem, ini kita kurangi jadi 3rem */
        }

        /* --- NAVBAR STYLE --- */
        #ftco-navbar {
            background: transparent !important;
            position: sticky;
            top: 0;
            z-index: 1030;
            width: 100%;
            padding: 0;
            overflow: visible !important;
        }

        .navbar-full-width {
            width: 100%;
            padding-left: 5%;
            padding-right: 5%;
            background: #153E80;
            transition: background 0.4s ease, padding 0.4s ease;
            box-shadow: none;
            padding-top: 5px;
            padding-bottom: 5px;
            position: relative;
            z-index: 1031;
        }

        #ftco-navbar.scrolled-nav .navbar-full-width {
            background: rgba(37, 86, 166, 0.95) !important;
            backdrop-filter: blur(10px);
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .navbar-collapse {
            overflow: visible !important;
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
            display: block;
            visibility: hidden;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .dropdown-menu.show {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown-item {
            color: var(--text-color);
            font-weight: 500;
            font-size: 14px;
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
            position: relative;
            transition: color 0.3s ease;
        }

        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link:hover,
        .ftco-navbar-light .navbar-nav>.nav-item.active>.nav-link {
            color: #ffffff !important;
        }

        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: 0;
            left: 0;
            background: var(--brand-light-blue);
            transition: width 0.3s ease;
        }

        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link:hover::after,
        .ftco-navbar-light .navbar-nav>.nav-item.active>.nav-link::after {
            width: 100%;
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
            letter-spacing: -0.5px;
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
            font-weight: 600 !important;
            font-size: 14px !important;
            margin-left: 20px;
            border: 1px solid var(--brand-light-blue);
            transition: all 0.3s;
        }

        .nav-cta-btn:hover {
            background-color: transparent !important;
            border: 1px solid #ffffff;
        }

        .navbar-toggler .fa-bars {
            color: #ffffff !important;
            font-size: 24px;
        }

        @media (max-width: 991.98px) {
            .navbar-full-width {
                padding-left: 15px;
                padding-right: 15px;
            }

            .dropdown-menu {
                position: static;
                background: rgba(255, 255, 255, 0.05);
                display: none;
                visibility: visible;
                opacity: 1;
                transform: none;
            }

            .dropdown-menu.show {
                display: block;
            }

            .dropdown-item {
                color: #fff;
            }
        }

        /* --- HERO OVERLAY --- */
        .hero-wrap-2 .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(21, 62, 128, 0.85);
            z-index: 1;
        }

        .hero-wrap-2 .container {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            align-items: flex-end;
            padding-bottom: 40px;
            /* Reduced from 80px */
        }

        .breadcrumbs span {
            color: rgba(255, 255, 255, 0.8);
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .breadcrumbs span a {
            color: #fff;
        }

        /* --- LEGALITAS PDF STYLE --- */
        .pdf-viewer-container {
            background: #fff;
            padding: 5px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
            overflow: hidden;
        }

        .pdf-frame {
            width: 100%;
            height: 800px;
            border: none;
            display: block;
        }

        @media (max-width: 768px) {
            .pdf-frame {
                height: 500px;
            }
        }

        .cert-card {
            background: #fff;
            padding: 25px;
            /* Sedikit dikurangi */
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
            text-align: center;
            border-bottom: 3px solid var(--brand-light-blue);
        }

        .cert-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(21, 62, 128, 0.15);
        }

        .cert-icon {
            font-size: 40px;
            color: var(--brand-dark-blue);
            margin-bottom: 15px;
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
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="/about/vision-mission">Vision & Mission</a>
                            <a class="dropdown-item" href="/about/legalitas">Legalitas & Sertifikasi</a>
                            <a class="dropdown-item" href="/about/data-perusahaan">Data Perusahaan</a>
                            <a class="dropdown-item" href="/about/tim-kami">Tim Kami</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="/project" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="/products" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link nav-cta-btn text-center">Get a Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_services.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span class="mr-2">About Us <i class="fa fa-chevron-right"></i></span>
                        <span>Legalitas</span>
                    </p>
                    <h1 class="mb-0 bread" style="font-weight: 700; color: #fff;">Legalitas & Sertifikasi</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" style="padding-bottom: 2rem;">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading" style="color: var(--brand-blue);">Kepatuhan Hukum</span>
                    <h2 class="mb-3" style="color: var(--brand-dark-blue);">Sertifikat Badan Usaha (SBU)</h2>
                    <p style="color: #666;">
                        Sebagai bentuk komitmen kami terhadap profesionalisme dan kepatuhan terhadap regulasi
                        pemerintah,
                        PT Triglobalindo Berkat Utama memiliki dokumen legalitas lengkap.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">
                    <div class="pdf-viewer-container">
                        <iframe src="{{ asset('files/sbu_triglobalindo.pdf') }}" class="pdf-frame"
                            allowfullscreen></iframe>
                    </div>

                    <div class="text-center mt-3">
                        <p class="mb-2" style="font-size: 14px; color: #666;">Jika dokumen tidak muncul di atas,
                            Anda dapat mengunduhnya langsung.</p>
                        <a href="{{ asset('files/sbu_triglobalindo.pdf') }}" target="_blank"
                            class="btn btn-primary py-3 px-4">
                            <i class="fas fa-file-download mr-2"></i> Download Dokumen Legalitas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" style="padding-top: 2rem;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <h2 class="mb-4" style="color: var(--brand-dark-blue);">Dokumen Legalitas Lainnya</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4 ftco-animate">
                    <div class="cert-card">
                        <div class="cert-icon"><span class="fas fa-file-contract"></span></div>
                        <h4 style="font-weight: 700; color: var(--brand-dark-blue);">NIB</h4>
                        <p class="mb-0 text-muted">Nomor Induk Berusaha</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 ftco-animate">
                    <div class="cert-card">
                        <div class="cert-icon"><span class="fas fa-balance-scale"></span></div>
                        <h4 style="font-weight: 700; color: var(--brand-dark-blue);">SK Kemenkumham</h4>
                        <p class="mb-0 text-muted">Surat Keputusan Pengesahan Badan Hukum</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 ftco-animate">
                    <div class="cert-card">
                        <div class="cert-icon"><span class="fas fa-id-card"></span></div>
                        <h4 style="font-weight: 700; color: var(--brand-dark-blue);">NPWP</h4>
                        <p class="mb-0 text-muted">Nomor Pokok Wajib Pajak Perusahaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.036873641324!2d106.9746399!3d-6.2588729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d0020f5c945%3A0x123456789abc!2sRuko%20Grand%20Galaxy%20City!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        });

        $(document).ready(function() {
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
