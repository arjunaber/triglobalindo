<!DOCTYPE html>
<html lang="id">

<head>
    <title>Layanan Kami - PT. Triglobalindo Berkat Utama</title>
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
        /* --- CUSTOM TBU THEME BY ARJUNA --- */
        :root {
            --brand-dark-blue: #153E80;
            --brand-blue: #2556A6;
            --brand-light-blue: #3D76D4;
            --brand-white: #FBFBF3;
            --text-color: #333333;
        }

        body {
            font-family: 'Inter', 'Helvetica', 'Arial', sans-serif;
            background-color: var(--brand-white);
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

        /* --- NAVBAR STYLES (Sama seperti Home) --- */
        #ftco-navbar {
            background: transparent !important;
            position: fixed;
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
            /* Default Solid Blue for Subpages if needed, or controlled by scroll */
            transition: background 0.4s ease, padding 0.4s ease, box-shadow 0.4s ease;
            box-shadow: none;
            padding-top: 5px;
            padding-bottom: 5px;
            position: relative;
            z-index: 1031;
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

        /* --- SERVICES PAGE SPECIFIC CSS --- */

        /* Hero Section for Subpages */
        .hero-wrap-2 {
            height: 400px;
            position: relative;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .hero-wrap-2 .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(21, 62, 128, 0.85);
            /* Solid Blue Overlay */
        }

        .hero-wrap-2 .slider-text {
            height: 400px;
        }

        /* Service Cards */
        .service-detail-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border-bottom: 4px solid transparent;
        }

        .service-detail-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-bottom: 4px solid var(--brand-light-blue);
        }

        .service-icon-box {
            width: 80px;
            height: 80px;
            background: rgba(61, 118, 212, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            color: var(--brand-dark-blue);
            font-size: 35px;
        }

        /* Process/Workflow */
        .process-wrap {
            position: relative;
        }

        .process-card {
            text-align: center;
            padding: 30px 15px;
            position: relative;
        }

        .process-num {
            width: 50px;
            height: 50px;
            background: var(--brand-dark-blue);
            color: #fff;
            font-weight: 700;
            font-size: 20px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        /* Garis penghubung timeline (desktop only) */
        .process-line::after {
            content: '';
            position: absolute;
            top: 55px;
            /* Sesuaikan dengan posisi vertical number */
            left: 50%;
            width: 100%;
            height: 2px;
            background: #e0e0e0;
            z-index: 1;
        }

        .process-card:last-child .process-line::after {
            display: none;
        }

        @media (max-width: 768px) {
            .process-line::after {
                display: none;
            }

            /* Hide line on mobile */
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
                    <li class="nav-item active"><a href="/services" class="nav-link">Services</a></li>
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

    <div class="content-wrapper">

        <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_services.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <h1 class="mb-2 bread" style="font-weight: 800; color: #fff;">Layanan & Solusi</h1>
                        <p class="breadcrumbs text-white-50">
                            <span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right ml-2"
                                        style="font-size: 10px;"></i></a></span>
                            <span>Services</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section pb-0">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <span class="subheading" style="color: var(--brand-blue);">Lingkup Pekerjaan</span>
                        <h2 class="mb-4" style="color: var(--brand-dark-blue);">Solusi Terintegrasi untuk Kebutuhan
                            Anda</h2>
                        <p style="color: #666;">PT. Triglobalindo Berkat Utama berkomitmen memberikan layanan terbaik
                            yang mencakup konstruksi, pengadaan barang teknis, hingga fabrikasi khusus. Kami bekerja
                            dengan standar mutu tinggi dan presisi.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pt">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 d-flex align-items-stretch ftco-animate mb-4">
                        <div class="service-detail-card">
                            <div class="service-icon-box">
                                <span class="flaticon-engineer-1"></span>
                            </div>
                            <h3 style="color: var(--brand-dark-blue); font-weight: 700; margin-bottom: 20px;">General
                                Contractor</h3>
                            <p style="color: #666;">Kami menangani proyek konstruksi dari tahap perencanaan hingga
                                serah terima, mencakup:</p>
                            <ul style="list-style: none; padding-left: 0; color: #555;">
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Pekerjaan Sipil & Arsitektur</li>
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Renovasi Bangunan & Kantor</li>
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Instalasi MEP (Mechanical,
                                    Electrical, Plumbing)</li>
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Maintenance Gedung</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch ftco-animate mb-4">
                        <div class="service-detail-card">
                            <div class="service-icon-box">
                                <span class="flaticon-worker-1"></span>
                            </div>
                            <h3 style="color: var(--brand-dark-blue); font-weight: 700; margin-bottom: 20px;">Supplier
                            </h3>
                            <p style="color: #666;">Penyediaan material dan peralatan teknis berkualitas dari brand
                                terpercaya untuk mendukung operasional industri:</p>
                            <ul style="list-style: none; padding-left: 0; color: #555;">
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Material Konstruksi & Sipil</li>
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Sparepart Mesin & Industri</li>
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Perangkat Elektrikal & Safety</li>
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> AC & Sistem Pendingin (Gree,
                                    Panasonic)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch ftco-animate mb-4">
                        <div class="service-detail-card">
                            <div class="service-icon-box">
                                <span class="flaticon-engineer"></span>
                            </div>
                            <h3 style="color: var(--brand-dark-blue); font-weight: 700; margin-bottom: 20px;">
                                Fabrication</h3>
                            <p style="color: #666;">Layanan fabrikasi logam dan material khusus yang disesuaikan dengan
                                spesifikasi teknis proyek Anda:</p>
                            <ul style="list-style: none; padding-left: 0; color: #555;">
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Konstruksi Baja (Steel Structure)
                                </li>
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Tangki & Pipa Industri</li>
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Pembuatan Pagar, Kanopi & Railing
                                </li>
                                <li class="mb-2"><i class="fa fa-check mr-2"
                                        style="color: var(--brand-light-blue);"></i> Custom Metal Works</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="ftco-section" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading" style="color: var(--brand-blue);">Alur Kerja</span>
                        <h2 class="mb-4" style="color: var(--brand-dark-blue);">Bagaimana Kami Bekerja</h2>
                    </div>
                </div>
                <div class="row process-wrap">

                    <div class="col-md-3 ftco-animate process-card">
                        <div class="process-line"></div>
                        <div class="process-num">1</div>
                        <h5 style="font-weight: 700;">Konsultasi</h5>
                        <p style="font-size: 14px; color: #666;">Diskusi mendalam mengenai kebutuhan proyek,
                            spesifikasi, dan anggaran Anda.</p>
                    </div>

                    <div class="col-md-3 ftco-animate process-card">
                        <div class="process-line"></div>
                        <div class="process-num">2</div>
                        <h5 style="font-weight: 700;">Perencanaan</h5>
                        <p style="font-size: 14px; color: #666;">Penyusunan desain, estimasi biaya (RAB), dan jadwal
                            kerja yang presisi.</p>
                    </div>

                    <div class="col-md-3 ftco-animate process-card">
                        <div class="process-line"></div>
                        <div class="process-num">3</div>
                        <h5 style="font-weight: 700;">Eksekusi</h5>
                        <p style="font-size: 14px; color: #666;">Pelaksanaan pekerjaan atau pengadaan barang dengan
                            pengawasan mutu ketat.</p>
                    </div>

                    <div class="col-md-3 ftco-animate process-card">
                        <div class="process-num">4</div>
                        <h5 style="font-weight: 700;">Serah Terima</h5>
                        <p style="font-size: 14px; color: #666;">Pemeriksaan akhir (QC) dan serah terima hasil
                            pekerjaan kepada klien.</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5" style="background-color: var(--brand-dark-blue);">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center text-center">
                    <div class="col-md-8 ftco-animate">
                        <h3 style="color: #fff; font-weight: 700;">Siap Memulai Proyek Anda?</h3>
                        <p style="color: rgba(255,255,255,0.8);">Hubungi tim TBU sekarang untuk mendapatkan penawaran
                            terbaik sesuai kebutuhan Anda.</p>
                        <a href="/contact" class="btn btn-white px-5 py-3 mt-3"
                            style="border-radius: 4px; font-weight: bold; color: var(--brand-dark-blue);">
                            Hubungi Kami
                        </a>
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
