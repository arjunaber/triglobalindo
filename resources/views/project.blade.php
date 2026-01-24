<!DOCTYPE html>
<html lang="id">

<head>
    <title>Portofolio - PT. Triglobalindo Berkat Utama</title>
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
        /* --- CORE THEME VARIABLES --- */
        :root {
            --brand-dark-blue: #153E80;
            --brand-blue: #2556A6;
            --brand-light-blue: #3D76D4;
            --brand-white: #FBFBF3;
            --text-color: #333333;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.7;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content-wrapper {
            flex: 1;
        }

        /* --- NAVBAR STYLING --- */
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

        /* --- HERO SECTION --- */
        .hero-wrap-2 {
            height: 450px;
            position: relative;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-wrap-2 .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(21, 62, 128, 0.95), rgba(61, 118, 212, 0.75));
        }

        .hero-wrap-2 .slider-text {
            height: 450px;
        }

        .bread {
            font-weight: 800;
            letter-spacing: -1px;
        }

        /* --- CONTENT STYLING --- */
        .section-header {
            margin-bottom: 40px;
        }

        .section-title {
            color: var(--brand-dark-blue);
            font-weight: 800;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 5px;
            background: var(--brand-light-blue);
            margin-top: 15px;
            border-radius: 5px;
        }

        .text-content p {
            color: #555;
            font-size: 16px;
            margin-bottom: 25px;
            text-align: justify;
        }

        /* --- STATS CARDS --- */
        .stats-container {
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .stat-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            border-bottom: 4px solid transparent;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(21, 62, 128, 0.15);
            border-bottom-color: var(--brand-light-blue);
        }

        .stat-icon {
            font-size: 40px;
            color: var(--brand-light-blue);
            margin-bottom: 15px;
            display: inline-block;
        }

        .stat-number {
            display: block;
            font-size: 48px;
            font-weight: 800;
            color: var(--brand-dark-blue);
            line-height: 1;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 14px;
            font-weight: 600;
            color: #777;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* --- CLIENTS SECTION FIXED (USAHAKAN GAMBAR UTUH) --- */
        .client-showcase-box {
            background: #fff;
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s ease;
            position: relative;
            margin-bottom: 30px;
            /* FIX: Set fixed height for the box, and use flex to center content */
            height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .client-showcase-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }

        .client-showcase-box img {
            /* FIX: Remove fixed height on image, let it scale naturally without cropping */
            width: auto;
            max-width: 100%;
            max-height: 320px;
            /* Limit height to leave room for badge */
            height: auto;
            object-fit: contain;
            /* Ensures image is fully visible */
            border-radius: 12px;
            display: block;
            margin: auto 0;
            /* Center vertically in available space */
        }

        .client-badge {
            /* FIX: Ensure badge is full width at bottom */
            width: 100%;
            margin-top: 15px;
            text-align: center;
            padding: 12px;
            background: var(--light-bg);
            border-radius: 8px;
            font-weight: 700;
            color: var(--brand-dark-blue);
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        /* --- PROJECT SLIDER STYLES --- */
        .project-slider-area {
            margin-top: 50px;
            margin-bottom: 30px;
            position: relative;
        }

        .project-item {
            display: block;
            width: 100%;
            height: 350px;
            /* Tinggi tetap agar semua gambar sama rata */
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .project-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Kunci agar gambar tidak gepeng/stretch */
            object-position: center;
            transition: transform 0.5s ease;
        }

        .project-item:hover img {
            transform: scale(1.05);
            /* Efek zoom sedikit saat hover */
        }

        /* Custom Navigation Buttons Below Slider */
        .slider-nav-custom {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 25px;
        }

        .nav-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--brand-light-blue);
            color: var(--brand-light-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.3s ease;
            outline: none;
        }

        .nav-btn:hover {
            background: var(--brand-light-blue);
            color: #fff;
            box-shadow: 0 5px 15px rgba(61, 118, 212, 0.4);
            transform: translateY(-2px);
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
                    <li class="nav-item active"><a href="/project" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="/products" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link nav-cta-btn text-center">Get a Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">

        <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/project-1.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <h1 class="mb-2 bread" style="color: #fff;">Portofolio Kami</h1>
                        <p class="breadcrumbs text-white-50">
                            <span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right ml-2"
                                        style="font-size: 10px;"></i></a></span>
                            <span>Portfolio</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ftco-animate text-content">
                        <div class="section-header">
                            <h2 class="section-title">PORTFOLIO PROYEK</h2>
                        </div>
                        <p class="lead" style="color: var(--brand-dark-blue); font-weight: 500;">
                            Berikut merupakan portofolio proyek yang telah dan sedang dikerjakan oleh PT Triglobalindo
                            Berkat Utama (TBU).
                        </p>
                        <p>
                            Portofolio ini mencerminkan pengalaman, kapabilitas, serta komitmen kami dalam menyelesaikan
                            setiap pekerjaan dengan standar kualitas dan keselamatan kerja yang baik. TBU menangani
                            berbagai jenis proyek yang mencakup pekerjaan konstruksi, fabrikasi, serta pengadaan produk
                            dan material pendukung.
                        </p>
                        <p>
                            Setiap proyek dilaksanakan dengan perencanaan yang matang, pengawasan yang terkontrol, dan
                            pendekatan kerja yang disesuaikan dengan kebutuhan klien. Portofolio ini akan terus
                            diperbarui seiring dengan bertambahnya proyek dan kerja sama yang kami jalankan.
                        </p>
                    </div>
                </div>

                <div class="row stats-container justify-content-center" id="counter-section">

                    <div class="col-md-5 mb-4 ftco-animate">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="flaticon-worker"></i>
                            </div>
                            <strong class="stat-number" data-number="27">0</strong>
                            <span class="stat-label">Proyek Pemerintah</span>
                        </div>
                    </div>

                    <div class="col-md-5 mb-4 ftco-animate">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="flaticon-architect"></i>
                            </div>
                            <strong class="stat-number" data-number="15">0</strong>
                            <span class="stat-label">Proyek Swasta & Mitra</span>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="project-slider-area">
                            <div class="owl-carousel owl-theme" id="project-slider">

                                <div class="item">
                                    <div class="project-item">
                                        <img src="{{ asset('images/project-1.jpg') }}" alt="Project 1">
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="project-item">
                                        <img src="{{ asset('images/project-2.jpg') }}" alt="Project 2">
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="project-item">
                                        <img src="{{ asset('images/project-3.jpg') }}" alt="Project 3">
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="project-item">
                                        <img src="{{ asset('images/project-4.jpg') }}" alt="Project 4">
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="project-item">
                                        <img src="{{ asset('images/project-5.jpg') }}" alt="Project 5">
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="project-item">
                                        <img src="{{ asset('images/project-6.jpg') }}" alt="Project 6">
                                    </div>
                                </div>

                            </div>

                            <div class="slider-nav-custom">
                                <button class="nav-btn prev-slide" title="Previous">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="nav-btn next-slide" title="Next">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section pt-0">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 ftco-animate text-content">
                        <div class="section-header">
                            <h2 class="section-title">OUR CLIENTS & PARTNERS</h2>
                        </div>
                        <p>
                            PT Triglobalindo Berkat Utama telah dipercaya oleh berbagai klien dari sektor swasta maupun
                            instansi, serta bekerja sama dengan mitra dan distributor dari brand nasional maupun
                            internasional.
                        </p>
                        <p>
                            Kepercayaan dan kemitraan ini menjadi landasan bagi TBU untuk terus menjaga profesionalisme,
                            kualitas layanan, dan komitmen dalam setiap proyek yang kami kerjakan.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 ftco-animate">
                        <div class="client-showcase-box">
                            <img src="{{ asset('images/goverment_pemerintah.png') }}"
                                alt="Klien Pemerintah & Instansi" class="img-fluid">
                            <div class="client-badge">
                                <i class="fas fa-building mr-2"></i> Instansi Pemerintah
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 ftco-animate">
                        <div class="client-showcase-box">
                            <img src="{{ asset('images/swasta.png') }}" alt="Klien Sektor Swasta" class="img-fluid">
                            <div class="client-badge">
                                <i class="fas fa-handshake mr-2"></i> Sektor Swasta & Mitra
                            </div>
                        </div>
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
            // NAVBAR SCROLL
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

            // STATS ANIMATION (COUNTER BERGERAK)
            var counterSection = $('#counter-section');
            if (counterSection.length > 0) {
                counterSection.waypoint(function(direction) {
                    if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {
                        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(
                            '.');
                        $('.stat-number').each(function() {
                            var $this = $(this),
                                num = $this.data('number');
                            $this.animateNumber({
                                number: num,
                                numberStep: comma_separator_number_step
                            }, 2000); // Durasi 2 detik
                        });
                        $(this.element).addClass('ftco-animated');
                    }
                }, {
                    offset: '95%'
                });
            }

            var owl = $('#project-slider');
            owl.owlCarousel({
                loop: true, // Looping terus menerus
                margin: 20, // Jarak antar gambar
                nav: false, // Matikan nav bawaan (kita pakai custom button)
                dots: false, // Hilangkan titik-titik indikator (opsional)
                autoplay: true, // Aktifkan Auto Slide
                autoplayTimeout: 1000, // Durasi per slide (3 detik)
                autoplayHoverPause: true, // Pause saat kursor di atas gambar
                smartSpeed: 1000, // Kecepatan transisi halus
                mouseDrag: true, // Bisa digeser pakai cursor
                touchDrag: true, // Bisa digeser di HP
                responsive: {
                    0: {
                        items: 1 // HP: 1 gambar
                    },
                    600: {
                        items: 2 // Tablet: 2 gambar
                    },
                    1000: {
                        items: 3 // Desktop: 3 gambar
                    }
                }
            });

            // FUNGSI TOMBOL CUSTOM (Kiri & Kanan)
            $('.next-slide').click(function() {
                owl.trigger('next.owl.carousel');
            });
            $('.prev-slide').click(function() {
                owl.trigger('prev.owl.carousel');
            });
        });
    </script>
</body>

</html>
