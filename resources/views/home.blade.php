<!DOCTYPE html>
<html lang="id">

<head>
    <title>PT. Triglobalindo Berkat Utama - Contractor & Supplier</title>
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
            /* Primary Corporate */
            --brand-blue: #2556A6;
            /* Lighter Primary */
            --brand-light-blue: #3D76D4;
            /* Accent */
            --brand-white: #FBFBF3;
            /* Neutral Background */
            --text-color: #333333;
        }

        body {
            font-family: 'Inter', 'Helvetica', 'Arial', sans-serif;
            background-color: var(--brand-white);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- 1. NAVBAR FIXED & FULL WIDTH --- */

        /* Parent Wrapper: Reset Overflow agar Dropdown terlihat */
        #ftco-navbar {
            background: transparent !important;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1030;
            width: 100%;
            padding: 0;
            overflow: visible !important;
            /* PENTING */
        }

        /* Container Dalam: Logic Warna & Shape */
        .navbar-full-width {
            width: 100%;
            padding-left: 5%;
            padding-right: 5%;

            /* STATE AWAL: SOLID BIRU TUA */
            background: #153E80;

            /* Transisi Halus untuk background & padding */
            transition: background 0.4s ease, padding 0.4s ease, box-shadow 0.4s ease;
            -webkit-transition: background 0.4s ease, padding 0.4s ease, box-shadow 0.4s ease;

            box-shadow: none;
            padding-top: 5px;
            padding-bottom: 5px;

            position: relative;
            z-index: 1031;
            /* Di atas parent */
        }

        /* STATE SCROLL: TRANSPARAN + BLUR */
        #ftco-navbar.scrolled-nav .navbar-full-width {
            /* Warna Biru Terang dengan Opacity */
            background: rgba(37, 86, 166, 0.9) !important;

            /* Efek Kaca */
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            /* Shadow Halus */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);

            /* Lebih Ramping */
            padding-top: 0px;
            padding-bottom: 0px;
        }

        /* --- 2. DROPDOWN MENU FIX --- */
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

            /* Posisi Absolut Mutlak */
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 99999 !important;

            /* Animasi Fade/Slide Custom (Bukan jQuery) */
            display: block;
            /* Selalu block tapi di-hide via opacity */
            visibility: hidden;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        /* Class .show ditambahkan via JS saat hover */
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

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: var(--brand-dark-blue);
            padding-left: 25px;
            /* Efek geser */
        }

        /* --- 3. ELEGANT HOVER STYLE (MENU UTAMA) --- */
        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            font-weight: 500 !important;
            font-size: 14px;
            padding: 25px 15px;
            /* Area klik luas */
            letter-spacing: 0.5px;
            position: relative;
            transition: color 0.3s ease;
        }

        /* Hover State */
        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link:hover,
        .ftco-navbar-light .navbar-nav>.nav-item.active>.nav-link {
            color: #ffffff !important;
        }

        /* Garis Bawah (Underline Animation) */
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

        /* --- 4. LOGO & UTILITIES --- */
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

        /* CTA Button */
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

        /* Mobile Fixes */
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
                border-top: none;
                box-shadow: none;
                visibility: visible;
                opacity: 1;
                transform: none;
                display: none;
            }

            .dropdown-menu.show {
                display: block;
            }

            .dropdown-item {
                color: #fff;
            }
        }

        /* --- Other Styles (Hero, Services, Footer) --- */
        .top {
            background-color: #fff;
            font-size: 13px;
        }

        .hero-wrap .overlay {
            background: linear-gradient(to right, rgba(21, 62, 128, 0.9), rgba(21, 62, 128, 0.6));
        }

        .bg-primary {
            background-color: var(--brand-dark-blue) !important;
        }

        .btn-primary {
            background-color: var(--brand-dark-blue);
            border-color: var(--brand-dark-blue);
        }

        .btn-primary:hover {
            background-color: var(--brand-light-blue);
            border-color: var(--brand-light-blue);
        }

        .service-card-1 {
            background-color: #153E80;
        }

        .service-card-2 {
            background-color: #1E4B94;
        }

        .service-card-3 {
            background-color: #2859AA;
        }

        .counter-box {
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        /* --- UPDATE UKURAN LOGO --- */
        .brand-logo {
            filter: grayscale(100%);
            /* Hitam putih */
            opacity: 0.7;
            /* Sedikit lebih jelas dari sebelumnya */
            transition: 0.3s;

            /* UKURAN DIPERBESAR */
            max-height: 95px;
            /* Naik dari 60px ke 95px */
            width: auto;
            /* Lebar otomatis proporsional */
            max-width: 100%;
            /* Menjaga agar tidak lewat batas kolom */
        }

        .brand-logo:hover {
            filter: grayscale(0%);
            /* Berwarna saat hover */
            opacity: 1;
            transform: scale(1.1);
            /* Efek zoom sedikit saat hover */
        }

        /* --- NEW PROJECT SECTION STYLE --- */

        /* 1. Styling Gambar Kiri */
        .project-image-left {
            width: 100%;
            height: 100%;
            min-height: 500px;
            /* Tinggi minimal agar gagah */
            background-size: cover;
            background-position: center;
            border-radius: 20px;
            /* Sudut melengkung modern */
            box-shadow: 20px 20px 60px rgba(0, 0, 0, 0.15);
            /* Shadow lembut tapi dalam */
            position: relative;
            overflow: hidden;
        }

        /* Overlay gradient di gambar agar teks (jika ada) terbaca & lebih artistik */
        .project-image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(21, 62, 128, 0.8), transparent);
        }

        /* 2. Styling Kartu Statistik (Kanan) */
        .stat-card-modern {
            background: #ffffff;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            /* Shadow sangat halus */
            transition: all 0.3s ease;
            border-top: 4px solid transparent;
            /* Persiapan untuk garis warna */
            height: 100%;
            /* Agar tinggi sama rata */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            /* Rata kiri agar terlihat technical */
        }

        /* Efek Hover pada Kartu */
        .stat-card-modern:hover {
            transform: translateY(-10px);
            /* Naik ke atas saat hover */
            box-shadow: 0 20px 40px rgba(21, 62, 128, 0.15);
        }

        /* Warna-warni garis atas sesuai urutan (Opsional, atau samakan biru semua) */
        .stat-card-1 {
            border-top-color: var(--brand-dark-blue);
        }

        .stat-card-2 {
            border-top-color: var(--brand-light-blue);
        }

        .stat-card-3 {
            border-top-color: var(--brand-light-blue);
        }

        .stat-card-4 {
            border-top-color: var(--brand-dark-blue);
        }

        /* Tipografi dalam kartu */
        .stat-number {
            font-size: 42px;
            font-weight: 800;
            color: var(--brand-dark-blue);
            line-height: 1;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #888;
        }

        .stat-icon {
            font-size: 30px;
            color: var(--brand-light-blue);
            margin-bottom: 15px;
            opacity: 0.8;
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
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="/about/profile-perusahaan">Profile Perusahaan</a>
                            <a class="dropdown-item" href="/about/visi-misi">Vision & Mission</a>
                            <a class="dropdown-item" href="/about/tim-kami">Tim Kami</a>
                            <a class="dropdown-item" href="/about/legalitas">Legalitas & Sertifikasi</a>
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
    <section class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/Hero_01.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-lg-8 ftco-animate">
                    <div class="mt-5">
                        <h1 class="mb-2" style="font-weight: 800; color: #fff; font-size: 3.5rem;">PT. Triglobalindo
                            Berkat Utama</h1>
                        <span class="subheading text-white mb-4 d-block"
                            style="font-size: 18px; letter-spacing: 3px; text-transform: uppercase; font-weight: 500; border-left: 4px solid var(--brand-light-blue); padding-left: 15px;">
                            Build on Trust, Driven by Excellence
                        </span>

                        <p class="mb-4 text-white"
                            style="font-family: 'Inter', sans-serif; opacity: 0.9; max-width: 600px; font-size: 1.1rem;">
                            PT Triglobalindo Berkat Utama (TBU) adalah perusahaan kontraktor profesional yang berbasis
                            di Bekasi, bergerak di bidang general contractor, supplier, dan fabrication.
                        </p>
                        <p>
                            <a href="/contact" target="_blank" class="btn btn-primary py-3 px-4 mr-2">Hubungi
                                Kami</a>
                            <a href="#projects-section" class="btn btn-white py-3 px-4">Lihat Proyek</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="about-section" style="background-color: var(--brand-white);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="about-wrap img w-100"
                        style="background-image: url('{{ asset('images/about.jpg') }}'); border-radius: 8px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); min-height: 400px;">
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="row justify-content-center mb-4 pt-md-4">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading"
                                style="color: var(--brand-blue); font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">Tentang
                                Kami</span>
                            <h2 class="mb-4" style="color: var(--brand-dark-blue); font-weight: 700;">Mitra
                                Konstruksi Terpercaya</h2>
                            <p style="color: #666;">PT Triglobalindo Berkat Utama hadir sebagai mitra terpercaya dalam
                                pelaksanaan proyek konstruksi, pengadaan material, dan pekerjaan fabrikasi. Dengan
                                pengalaman dan tim yang kompeten, kami menangani berbagai jenis proyek mulai dari skala
                                kecil hingga menengah, baik untuk sektor swasta maupun pemerintahan.</p>

                            <p style="color: #666;">Kami mengedepankan kepercayaan, profesionalisme, dan keselamatan
                                kerja
                                dalam setiap proses, serta terus berupaya memberikan solusi terbaik sesuai kebutuhan
                                klien.</p>

                            <ul class="list-unstyled mt-4">
                                <li class="d-flex mb-3"><i class="fa fa-check-circle mr-3"
                                        style="color: var(--brand-light-blue); margin-top: 5px;"></i><span>Profesional
                                        & Berpengalaman</span></li>
                                <li class="d-flex mb-3"><i class="fa fa-check-circle mr-3"
                                        style="color: var(--brand-light-blue); margin-top: 5px;"></i><span>Kualitas
                                        Material Terbaik</span></li>
                                <li class="d-flex mb-3"><i class="fa fa-check-circle mr-3"
                                        style="color: var(--brand-light-blue); margin-top: 5px;"></i><span>Tepat
                                        Waktu</span></li>
                            </ul>

                            <p><a href="/about/data-perusahaan" class="btn btn-primary mt-3 px-4 py-3">Selengkapnya
                                    Tentang TBU</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2" id="services-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 pt-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading" style="color: var(--brand-blue);">Layanan Kami</span>
                    <h2 class="mb-4" style="color: var(--brand-dark-blue);">Solusi Terintegrasi</h2>
                </div>
            </div>
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex service-card-1">
                        <div class="icon justify-content-center align-items-center d-flex"><span
                                class="flaticon-engineer-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3 text-white">General Contractor</h3>
                            <p class="text-white-50">Pelaksanaan pekerjaan konstruksi yang mencakup perencanaan,
                                pengelolaan, dan pelaksanaan proyek dengan standar mutu tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2 d-flex service-card-2">
                        <div class="icon justify-content-center align-items-center d-flex"><span
                                class="flaticon-worker-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3 text-white">Supplier</h3>
                            <p class="text-white-50">Penyediaan dan pengadaan material serta produk pendukung
                                konstruksi dari brand terpercaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex service-card-3">
                        <div class="icon justify-content-center align-items-center d-flex"><span
                                class="flaticon-engineer"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3 text-white">Fabrication</h3>
                            <p class="text-white-50">Pekerjaan fabrikasi sesuai kebutuhan proyek, dengan proses yang
                                terkontrol untuk memastikan ketepatan spesifikasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="projects-section"
        style="
    background-image: url('{{ asset('images/gambar_kerja.jpg') }}'); 
    background-size: cover; 
    background-position: center center; 
    background-attachment: fixed; 
    position: relative; 
    padding: 7em 0;"
        data-stellar-background-ratio="0.7">

        <div class="overlay"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(251, 251, 243, 0.92); z-index: 0;">
        </div>

        <div class="container" style="position: relative; z-index: 1;">
            <div class="row d-flex align-items-center">

                <div class="col-lg-5 mb-5 mb-lg-0 ftco-animate">
                    <div class="project-image-left"
                        style="background-image: url('{{ asset('images/project-2.jpg') }}');">
                        <div class="project-image-overlay"></div>

                        <div style="position: absolute; bottom: 30px; left: 30px; color: white;">
                            <span
                                style="display: block; font-size: 12px; letter-spacing: 2px; text-transform: uppercase; opacity: 0.8;">Since
                                2014</span>
                            <h3 style="color: white; font-weight: 700; margin: 0;">Quality Construction</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 pl-lg-5 ftco-animate">

                    <div class="heading-section mb-5">
                        <span class="subheading"
                            style="color: var(--brand-blue); font-weight: 600; letter-spacing: 2px;">Track
                            Record</span>

                        <h2 class="mb-3" style="color: var(--brand-dark-blue);">Pengalaman Proyek Kami</h2>

                        <p style="color: #666; font-size: 1.1rem;">
                            Berbagai proyek yang telah kami kerjakan menjadi bukti komitmen TBU dalam
                            memberikan hasil kerja yang berkualitas dan dapat dipercaya.
                        </p>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-4">
                            <div class="stat-card-modern stat-card-1">
                                <div class="stat-icon"><span class="flaticon-engineer"></span></div>
                                <strong class="number stat-number" data-number="50">0</strong>
                                <span class="stat-label">Total Proyek Selesai</span>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="stat-card-modern stat-card-2">
                                <div class="stat-icon"><span class="flaticon-worker"></span></div>
                                <strong class="number stat-number" data-number="20">0</strong>
                                <span class="stat-label">Proyek Pemerintah</span>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="stat-card-modern stat-card-3">
                                <div class="stat-icon"><span class="flaticon-architect"></span></div>
                                <strong class="number stat-number" data-number="30">0</strong>
                                <span class="stat-label">Proyek Swasta</span>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="stat-card-modern stat-card-4">
                                <div class="stat-icon"><span class="flaticon-engineer-1"></span></div>
                                <strong class="number stat-number" data-number="15">0</strong>
                                <span class="stat-label">Mitra & Klien Aktif</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-section py-5">
        <div class="container">
            <div class="col-md-8 mx-auto text-center heading-section ftco-animate">

                <span class="subheading" style="color: var(--brand-blue);">Produk & Brand</span>

                <h2 class="mb-4" style="color: var(--brand-dark-blue);">Produk & Brand yang Kami Gunakan</h2>

                <p style="color: #666; margin-bottom: 30px;">
                    Dalam setiap proyek, PT Triglobalindo Berkat Utama menggunakan dan mensuplai produk
                    dari brand terpercaya nasional maupun internasional untuk memastikan kualitas,
                    keandalan, dan ketahanan hasil pekerjaan.
                </p>
            </div>

            <div class="row d-flex align-items-center justify-content-center">

                <div class="col-md-2 col-6 mb-5 ftco-animate text-center"> <img
                        src="{{ asset('images/LOGO PARTNERSUPLIER - (Zwick_Roell).png') }}"
                        class="img-fluid brand-logo" alt="Zwick Roell">
                </div>

                <div class="col-md-2 col-6 mb-5 ftco-animate text-center">
                    <img src="{{ asset('images/LOGO PARTNERSUPLIER - (GREE).png') }}" class="img-fluid brand-logo"
                        alt="Gree">
                </div>

                <div class="col-md-2 col-6 mb-5 ftco-animate text-center">
                    <img src="{{ asset('images/LOGO PARTNERSUPLIER - (Panasonic).png') }}"
                        class="img-fluid brand-logo" alt="Panasonic">
                </div>

                <div class="col-md-2 col-6 mb-5 ftco-animate text-center">
                    <img src="{{ asset('images/LOGO PARTNERSUPLIER -(Saerindo).png') }}" class="img-fluid brand-logo"
                        alt="Saerindo">
                </div>

                <div class="col-md-2 col-6 mb-5 ftco-animate text-center">
                    <img src="{{ asset('images/LOGO PARTNERSUPLIER - (TKE ELEVATOR).png') }}"
                        class="img-fluid brand-logo" alt="TKE Elevator">
                </div>

            </div>

            <div class="row justify-content-center mt-2">
                <div class="col-md-4 text-center">
                    <a href="/products" class="btn btn-white px-5 py-3"
                        style="border: 1px solid #ddd; border-radius: 50px; font-weight: 600;">Lihat Semua Produk</a>
                </div>
            </div>
        </div>
    </section>

    <section class="closing-cta text-center" style="background-color: var(--brand-dark-blue); padding: 5rem 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 ftco-animate">
                    <h2 class="mb-3" style="color: #fff; font-weight: 700;">Siap Mewujudkan Proyek Anda Bersama TBU?
                    </h2>

                    <p class="mb-4 text-white-50">Diskusikan kebutuhan proyek konstruksi, pengadaan, atau fabrikasi
                        Anda bersama tim PT Triglobalindo Berkat Utama. Kami siap menjadi mitra yang dapat Anda
                        percaya.</p> <a href="https://wa.me/6281218087689" target="_blank"
                        class="btn btn-white py-3 px-5"
                        style="border-radius: 4px; font-weight: bold; color: var(--brand-dark-blue);">Hubungi Kami
                        Sekarang</a>
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
        // 1. LOGIKA SCROLL (TRANSPARAN / SOLID)
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

        // 2. LOGIKA DROPDOWN HOVER (DESKTOP) & KLIK (MOBILE)
        $(document).ready(function() {
            // Cek jika layar Desktop (> 991px)
            if ($(window).width() > 991) {
                $('.navbar .dropdown').hover(function() {
                    $(this).addClass('show');
                    $(this).find('.dropdown-menu').addClass('show');
                }, function() {
                    $(this).removeClass('show');
                    $(this).find('.dropdown-menu').removeClass('show');
                });
            }
            // Jika Mobile, biarkan default Bootstrap (Klik)
        });

        // 3. ANIMASI ANGKA (Counter)
        $(document).ready(function() {
            var $section = $('#projects-section');
            if ($section.length > 0) {
                $section.waypoint(function(direction) {
                    if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {
                        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(
                            '.');
                        $('.number').each(function() {
                            var $this = $(this),
                                num = $this.data('number');
                            $this.animateNumber({
                                number: num,
                                numberStep: comma_separator_number_step
                            }, 2500);
                        });
                        $(this.element).addClass('ftco-animated');
                    }
                }, {
                    offset: '95%'
                });
            }
        });
    </script>

</body>

</html>
