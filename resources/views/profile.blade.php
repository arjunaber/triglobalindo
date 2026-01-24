<!DOCTYPE html>
<html lang="id">

<head>
    <title>Profil Perusahaan - PT. Triglobalindo Berkat Utama</title>
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

        /* --- NAVBAR STYLE (SAMA DENGAN INDEX) --- */
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
            /* Default Solid Blue */
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

        /* Dropdown Fix */
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

        /* Nav Link Style */
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

        /* Logo Style */
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

        /* Mobile Fix */
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

        /* --- CSS TAMBAHAN KHUSUS HALAMAN PROFILE --- */

        /* 1. Hero Section Sub-Page (Lebih Pendek) */
        .hero-wrap-2 {
            height: 500px;
            /* Tinggi fix agar tidak terlalu besar */
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
            background: rgba(21, 62, 128, 0.8);
            /* Overlay Biru */
            z-index: 1;
        }

        .hero-wrap-2 .container {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            align-items: flex-end;
            /* Teks di bawah */
            padding-bottom: 80px;
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

        /* 2. Styling Kartu Scope Bisnis */
        .scope-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border-bottom: 4px solid var(--brand-light-blue);
            position: relative;
            top: 0;
        }

        .scope-card:hover {
            top: -10px;
            /* Efek naik saat hover */
            box-shadow: 0 20px 40px rgba(21, 62, 128, 0.15);
        }

        .scope-icon {
            width: 70px;
            height: 70px;
            background: rgba(61, 118, 212, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
        }

        .scope-icon span {
            font-size: 35px;
            color: var(--brand-dark-blue);
        }

        .scope-list {
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }

        .scope-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
            font-size: 14px;
            color: #666;
        }

        .scope-list li::before {
            content: '\f00c';
            /* FontAwesome Check */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--brand-light-blue);
            font-size: 12px;
        }

        /* 3. Styling Value Box (Nilai Perusahaan) */
        .value-box {
            text-align: center;
            padding: 30px 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            transition: 0.3s;
            height: 100%;
        }

        .value-box:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-5px);
        }

        .value-icon-circle {
            width: 80px;
            height: 80px;
            background: var(--brand-light-blue);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
            font-size: 30px;
            transition: 0.5s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .value-box:hover .value-icon-circle {
            background: #fff;
            color: var(--brand-dark-blue);
            transform: rotateY(180deg);
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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_services.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span class="mr-2">About Us <i class="fa fa-chevron-right"></i></span>
                        <span>Data Perusahaan</span>
                    </p>
                    <h1 class="mb-0 bread" style="font-weight: 700; color: #fff;">Profil Perusahaan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="history-section">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img w-100"
                        style="background-image: url('{{ asset('images/project-2.jpg') }}'); border-radius: 20px; min-height: 450px; box-shadow: 20px 20px 60px rgba(0,0,0,0.1);">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 ftco-animate py-5">
                    <div class="heading-section mb-4">
                        <span class="subheading"
                            style="color: var(--brand-blue); font-weight: 600; letter-spacing: 2px;">Sejarah
                            Kami</span>
                        <h2 class="mb-4" style="color: var(--brand-dark-blue);">Perjalanan Membangun Kepercayaan
                        </h2>
                    </div>
                    <p style="color: #666;">PT Triglobalindo Berkat Utama (TBU) didirikan pada 30 Juli 2014, dan
                        merupakan perusahaan yang bergerak di bidang <strong>general contractor, supplier, dan
                            fabrication</strong>, dengan domisili di Bekasi, Jawa Barat.</p>

                    <p style="color: #666;">Sejak awal berdiri, TBU berkomitmen untuk memberikan solusi konstruksi dan
                        pengadaan yang profesional, terintegrasi, dan dapat dipercaya. Dengan dukungan tim yang kompeten
                        serta sistem kerja yang terstruktur, TBU menangani berbagai kebutuhan proyek konstruksi,
                        pekerjaan fabrikasi, hingga penyediaan produk pendukung dari brand terpercaya.</p>

                    <p style="color: #666;">Dalam setiap pelaksanaan proyek, PT Triglobalindo Berkat Utama
                        mengedepankan prinsip kepercayaan, kualitas pekerjaan, ketepatan waktu, serta keselamatan kerja.
                        Kami percaya bahwa keberhasilan proyek tidak hanya diukur dari hasil akhir, tetapi juga dari
                        proses kerja yang transparan, bertanggung jawab, dan sesuai dengan standar yang berlaku.</p>

                    <p style="color: #666;">Seiring dengan perkembangan industri dan kebutuhan klien, TBU terus
                        berupaya meningkatkan kualitas layanan, memperkuat kemitraan, serta memberikan nilai tambah
                        melalui hasil kerja yang optimal dan berkelanjutan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading" style="color: var(--brand-blue);">Ruang Lingkup</span>
                    <h2 class="mb-4" style="color: var(--brand-dark-blue);">Scope Bisnis Utama</h2>
                    <p style="color: #666;">Kami fokus pada tiga pilar utama layanan untuk memberikan solusi menyeluruh
                        bagi kebutuhan industri dan konstruksi Anda.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate mb-4">
                    <div class="scope-card">
                        <div class="scope-icon"><span class="flaticon-engineer-1"></span></div>
                        <h3 class="heading mb-3" style="font-weight: 700; color: var(--brand-dark-blue);">General
                            Contractor</h3>
                        <p style="color: #666; font-size: 14px;">Melayani jasa konstruksi umum meliputi:</p>
                        <ul class="scope-list">
                            <li>Pekerjaan Sipil & Arsitektur</li>
                            <li>Renovasi Gedung & Kantor</li>
                            <li>Mechanical, Electrical & Plumbing</li>
                            <li>Maintenance Gedung</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate mb-4">
                    <div class="scope-card">
                        <div class="scope-icon"><span class="flaticon-worker"></span></div>
                        <h3 class="heading mb-3" style="font-weight: 700; color: var(--brand-dark-blue);">Supplier
                        </h3>
                        <p style="color: #666; font-size: 14px;">Pengadaan barang dan material berkualitas:</p>
                        <ul class="scope-list">
                            <li>Material Konstruksi (Besi, Semen, Baja)</li>
                            <li>Peralatan Safety (APD)</li>
                            <li>Unit AC & Pendingin (Gree, Panasonic)</li>
                            <li>Sparepart Mesin & Industri</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate mb-4">
                    <div class="scope-card">
                        <div class="scope-icon"><span class="flaticon-engineer"></span></div>
                        <h3 class="heading mb-3" style="font-weight: 700; color: var(--brand-dark-blue);">Fabrication
                        </h3>
                        <p style="color: #666; font-size: 14px;">Manufaktur dan perakitan struktur:</p>
                        <ul class="scope-list">
                            <li>Konstruksi Baja Berat & Ringan</li>
                            <li>Pembuatan Tangki (Storage Tank)</li>
                            <li>Piping System & Ducting</li>
                            <li>Custom Metal Works</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" style="background-color: var(--brand-dark-blue); padding: 5rem 0;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading" style="color: var(--brand-light-blue);">Budaya Kami</span>
                    <h2 class="mb-4 text-white">Nilai Perusahaan</h2>
                    <p class="text-white-50">Fondasi yang kami pegang teguh dalam setiap langkah operasional bisnis.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate mb-4">
                    <div class="value-box">
                        <div class="value-icon-circle"><span class="fas fa-handshake"></span></div>
                        <h4 class="text-white font-weight-bold">Integrity</h4>
                        <p class="text-white-50 small">Menjunjung tinggi kejujuran dan etika bisnis dalam setiap
                            kerjasama dengan klien dan mitra.</p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate mb-4">
                    <div class="value-box">
                        <div class="value-icon-circle"><span class="fas fa-medal"></span></div>
                        <h4 class="text-white font-weight-bold">Quality</h4>
                        <p class="text-white-50 small">Berkomitmen memberikan hasil akhir terbaik dengan standar
                            material dan pengerjaan yang unggul.</p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate mb-4">
                    <div class="value-box">
                        <div class="value-icon-circle"><span class="fas fa-hard-hat"></span></div>
                        <h4 class="text-white font-weight-bold">Safety</h4>
                        <p class="text-white-50 small">Mengutamakan Kesehatan dan Keselamatan Kerja (K3) bagi seluruh
                            tim dan lingkungan proyek.</p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate mb-4">
                    <div class="value-box">
                        <div class="value-icon-circle"><span class="fas fa-lightbulb"></span></div>
                        <h4 class="text-white font-weight-bold">Innovation</h4>
                        <p class="text-white-50 small">Terus beradaptasi dengan teknologi dan metode konstruksi terbaru
                            untuk efisiensi yang lebih baik.</p>
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
        // LOGIKA SCROLL (TRANSPARAN / SOLID)
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

        // LOGIKA DROPDOWN
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
