<!DOCTYPE html>
<html lang="id">

<head>
    <title>Proyek Kami - PT. Triglobalindo Berkat Utama</title>
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
        /* --- 1. CORE THEME --- */
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

        /* --- 2. NAVBAR (Fixed & Blur Effect) --- */
        #ftco-navbar {
            background: transparent !important;
            position: fixed;
            top: 0;
            z-index: 1030;
            width: 100%;
            padding: 0;
        }

        .navbar-full-width {
            width: 100%;
            padding: 5px 5%;
            background: #153E80;
            transition: 0.4s ease;
        }

        #ftco-navbar.scrolled-nav .navbar-full-width {
            background: rgba(21, 62, 128, 0.9) !important;
            backdrop-filter: blur(15px);
            padding: 0 5%;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand-custom {
            display: flex;
            align-items: center;
            padding: 10px 0;
            color: #fff;
            text-decoration: none !important;
        }

        .logo-box-nav {
            width: 45px;
            height: 45px;
            background: #fff;
            color: var(--brand-dark-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            border-radius: 4px;
            margin-right: 12px;
        }

        .logo-text-nav {
            display: flex;
            flex-direction: column;
            line-height: 1.1;
        }

        .logo-title {
            font-size: 18px;
            font-weight: 700;
            color: #fff;
        }

        .logo-subtitle {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            font-weight: 500;
            font-size: 14px;
            padding: 25px 15px !important;
        }

        .nav-link:hover,
        .nav-item.active .nav-link {
            color: #fff !important;
        }

        .nav-cta-btn {
            background: var(--brand-light-blue) !important;
            color: #fff !important;
            border-radius: 4px;
            padding: 8px 25px !important;
            border: 1px solid var(--brand-light-blue);
            margin-left: 15px;
        }

        .nav-cta-btn:hover {
            background: transparent !important;
            border-color: #fff;
        }

        .dropdown-menu {
            border-top: 3px solid var(--brand-light-blue);
            border-radius: 0 0 4px 4px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            border: none;
        }

        .dropdown-item {
            padding: 10px 20px;
            font-size: 14px;
        }

        .dropdown-item:hover {
            background: #f8f9fa;
            color: var(--brand-dark-blue);
            padding-left: 25px;
            transition: 0.2s;
        }

        /* --- 3. HERO & PAGE HEADER --- */
        .hero-wrap-2 {
            height: 500px;
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
            background: linear-gradient(135deg, rgba(21, 62, 128, 0.95), rgba(61, 118, 212, 0.7));
        }

        .hero-wrap-2 .slider-text {
            height: 450px;
        }

        .bread {
            font-size: 3.5rem;
            font-weight: 800;
            letter-spacing: -1px;
        }

        /* --- 4. FLOATING STATS (Futuristic) --- */
        .floating-stats-container {
            margin-top: -100px;
            position: relative;
            z-index: 10;
        }

        .stat-card-modern {
            background: #ffffff;
            padding: 30px 25px;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-bottom: 4px solid transparent;
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .stat-card-modern:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 60px rgba(21, 62, 128, 0.2);
        }

        .stat-card-modern::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 4px;
            background: var(--brand-light-blue);
            transition: width 0.4s;
        }

        .stat-card-modern:hover::after {
            width: 100%;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 800;
            color: var(--brand-dark-blue);
            line-height: 1;
            margin-bottom: 5px;
            display: block;
        }

        .stat-label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #999;
        }

        .stat-icon {
            font-size: 40px;
            color: var(--brand-light-blue);
            position: absolute;
            top: 20px;
            right: 20px;
            opacity: 0.1;
            transform: rotate(-15deg);
        }

        /* --- 5. PROJECT GRID --- */
        .project-filter-btn {
            background: #fff;
            border: 1px solid #e0e0e0;
            color: #666;
            padding: 12px 35px;
            margin: 0 5px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
        }

        .project-filter-btn:hover,
        .project-filter-btn.active {
            background: var(--brand-dark-blue);
            color: #fff;
            border-color: var(--brand-dark-blue);
            box-shadow: 0 10px 20px rgba(21, 62, 128, 0.25);
            transform: translateY(-3px);
        }

        .project-card {
            margin-bottom: 30px;
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.06);
            transition: 0.4s;
            border: none;
            cursor: pointer;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .project-img-wrap {
            height: 260px;
            overflow: hidden;
            position: relative;
        }

        .project-img {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: transform 0.8s ease;
        }

        .project-card:hover .project-img {
            transform: scale(1.1);
        }

        .project-overlay-gradient {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
        }

        .project-content {
            padding: 30px;
            position: relative;
        }

        .project-cat {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--brand-light-blue);
            font-weight: 700;
            display: block;
            margin-bottom: 10px;
        }

        .project-title {
            color: var(--brand-dark-blue);
            font-size: 20px;
            font-weight: 800;
            margin: 0;
            line-height: 1.3;
        }

        .project-arrow {
            margin-top: 20px;
            font-size: 13px;
            font-weight: 700;
            color: #999;
            display: flex;
            align-items: center;
            transition: 0.3s;
        }

        .project-card:hover .project-arrow {
            color: var(--brand-light-blue);
        }

        .project-card:hover .project-arrow i {
            margin-left: 10px;
        }

        /* --- 6. PREMIUM MODAL STYLES (THE FIX) --- */

        /* Backdrop Gelap & Blur */
        .modal-backdrop.show {
            opacity: 0.85 !important;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            background-color: #051024;
        }

        /* Modal Container */
        .modal-xl-custom {
            max-width: 90%;
            /* Lebih lebar dari default modal-xl */
            margin: 1.75rem auto;
        }

        .modal-content {
            border: none;
            border-radius: 20px;
            overflow: visible;
            /* Penting agar tombol close bisa melayang keluar */
            background-color: transparent;
            /* Transparan agar shadow terlihat clean */
            box-shadow: 0 50px 100px rgba(0, 0, 0, 0.5);
        }

        /* Layout Grid di dalam Modal */
        .modal-body-custom {
            display: flex;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            min-height: 600px;
            /* Tinggi minimum agar gagah */
        }

        /* Kolom Kiri: Gambar (Wider Layout 65%) */
        .modal-img-col {
            flex: 0 0 65%;
            /* Gambar mengambil 65% lebar */
            max-width: 65%;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        /* Overlay tipis di gambar agar elegan */
        .modal-img-col::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.2), transparent);
        }

        /* Kolom Kanan: Teks (35%) */
        .modal-text-col {
            flex: 0 0 35%;
            max-width: 35%;
            padding: 50px 40px;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        /* Tombol Close Melayang (Floating X) */
        .btn-close-modal {
            position: absolute;
            top: -20px;
            right: -20px;
            width: 50px;
            height: 50px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1060;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            outline: none;
        }

        .btn-close-modal:hover {
            transform: rotate(90deg) scale(1.1);
            background: var(--brand-light-blue);
        }

        .btn-close-modal i {
            font-size: 24px;
            color: var(--brand-dark-blue);
        }

        .btn-close-modal:hover i {
            color: #fff;
        }

        /* Typography Modal */
        .modal-project-cat {
            color: var(--brand-light-blue);
            font-weight: 800;
            font-size: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: inline-block;
        }

        .modal-project-title {
            color: var(--brand-dark-blue);
            font-weight: 800;
            font-size: 32px;
            line-height: 1.2;
            margin-bottom: 30px;
        }

        .modal-detail-item {
            margin-bottom: 30px;
        }

        .modal-label {
            display: block;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #999;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .modal-value {
            font-size: 16px;
            color: #444;
            font-weight: 500;
            line-height: 1.6;
        }

        /* Status Badge di Modal */
        .modal-status-badge {
            display: inline-flex;
            align-items: center;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .bg-finished {
            background: #e8f5e9;
            color: #1b5e20;
            border: 1px solid #c8e6c9;
        }

        .bg-ongoing {
            background: #fff3e0;
            color: #e65100;
            border: 1px solid #ffe0b2;
        }

        /* Responsive Modal */
        @media (max-width: 991px) {
            .modal-xl-custom {
                max-width: 95%;
                margin: 10px auto;
            }

            .modal-body-custom {
                flex-direction: column;
                height: auto;
                min-height: auto;
            }

            .modal-img-col {
                flex: 0 0 300px;
                max-width: 100%;
                height: 300px;
            }

            .modal-text-col {
                flex: 0 0 auto;
                max-width: 100%;
                padding: 30px;
            }

            .btn-close-modal {
                top: 10px;
                right: 10px;
                width: 40px;
                height: 40px;
            }
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
                        <h1 class="mb-2 bread" style="color: #fff;">Portofolio Proyek</h1>
                        <p class="breadcrumbs text-white-50">
                            <span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right ml-2"
                                        style="font-size: 10px;"></i></a></span>
                            <span>Projects</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container floating-stats-container">
            <div class="row">
                <div class="col-md-3 mb-3 ftco-animate">
                    <div class="stat-card-modern">
                        <span class="flaticon-engineer stat-icon"></span>
                        <strong class="number stat-number" data-number="50">0</strong>
                        <span class="stat-label">Proyek Selesai</span>
                    </div>
                </div>
                <div class="col-md-3 mb-3 ftco-animate">
                    <div class="stat-card-modern">
                        <span class="flaticon-worker stat-icon"></span>
                        <strong class="number stat-number" data-number="20">0</strong>
                        <span class="stat-label">Proyek Pemerintah</span>
                    </div>
                </div>
                <div class="col-md-3 mb-3 ftco-animate">
                    <div class="stat-card-modern">
                        <span class="flaticon-architect stat-icon"></span>
                        <strong class="number stat-number" data-number="30">0</strong>
                        <span class="stat-label">Proyek Swasta</span>
                    </div>
                </div>
                <div class="col-md-3 mb-3 ftco-animate">
                    <div class="stat-card-modern">
                        <span class="flaticon-engineer-1 stat-icon"></span>
                        <strong class="number stat-number" data-number="15">0</strong>
                        <span class="stat-label">Mitra & Klien</span>
                    </div>
                </div>
            </div>
        </div>

        <section class="ftco-section pt-5 pb-5">
            <div class="container">

                <div class="row justify-content-center mb-5 mt-2">
                    <div class="col-md-10 text-center">
                        <button class="project-filter-btn active" data-filter="all">Semua Proyek</button>
                        <button class="project-filter-btn" data-filter="government">Government</button>
                        <button class="project-filter-btn" data-filter="private">Private Sector</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 filter government ftco-animate">
                        <div class="project-card" data-toggle="modal" data-target="#projectModal"
                            data-title="Renovasi Gedung Kemenkes" data-category="Government"
                            data-img="{{ asset('images/project-1.jpg') }}"
                            data-desc="Pekerjaan renovasi interior dan eksterior gedung utama Kemenkes, meliputi perbaikan struktur, pengecatan ulang facade, dan modernisasi area lobi utama."
                            data-scope="Civil Works, Interior, MEP" data-status="Finished">
                            <div class="project-img-wrap">
                                <div class="project-img"
                                    style="background-image: url('{{ asset('images/project-1.jpg') }}');"></div>
                                <div class="project-overlay-gradient"></div>
                            </div>
                            <div class="project-content">
                                <span class="project-cat">Government</span>
                                <h3 class="project-title">Renovasi Gedung Kemenkes</h3>
                                <div class="project-arrow">Lihat Detail <i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 filter private ftco-animate">
                        <div class="project-card" data-toggle="modal" data-target="#projectModal"
                            data-title="Gudang Logistik PT ABC" data-category="Private"
                            data-img="{{ asset('images/project-2.jpg') }}"
                            data-desc="Pembangunan konstruksi baja berat (WF) untuk gudang logistik seluas 2000m2 di kawasan industri Cikarang. Termasuk pekerjaan pondasi bore pile."
                            data-scope="Steel Structure, Foundation" data-status="On Going">
                            <div class="project-img-wrap">
                                <div class="project-img"
                                    style="background-image: url('{{ asset('images/project-2.jpg') }}');"></div>
                                <div class="project-overlay-gradient"></div>
                            </div>
                            <div class="project-content">
                                <span class="project-cat">Private</span>
                                <h3 class="project-title">Gudang Logistik PT ABC</h3>
                                <div class="project-arrow">Lihat Detail <i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 filter government ftco-animate">
                        <div class="project-card" data-toggle="modal" data-target="#projectModal"
                            data-title="Pengadaan AC Presisi" data-category="Government"
                            data-img="{{ asset('images/image_3.jpg') }}"
                            data-desc="Supply, instalasi, dan commissioning unit AC Presisi (Precision Air Conditioning) untuk ruang server data center Dinas Kominfo."
                            data-scope="Mechanical, Supply Equipment" data-status="Finished">
                            <div class="project-img-wrap">
                                <div class="project-img"
                                    style="background-image: url('{{ asset('images/image_3.jpg') }}');"></div>
                                <div class="project-overlay-gradient"></div>
                            </div>
                            <div class="project-content">
                                <span class="project-cat">Government</span>
                                <h3 class="project-title">Pengadaan AC Presisi</h3>
                                <div class="project-arrow">Lihat Detail <i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 filter private ftco-animate">
                        <div class="project-card" data-toggle="modal" data-target="#projectModal"
                            data-title="Interior Kantor Startup Z" data-category="Private"
                            data-img="{{ asset('images/image_4.jpg') }}"
                            data-desc="Desain dan build interior kantor modern dengan konsep open space industrial. Termasuk custom furniture dan instalasi lighting."
                            data-scope="Interior Design, Furniture" data-status="Finished">
                            <div class="project-img-wrap">
                                <div class="project-img"
                                    style="background-image: url('{{ asset('images/image_4.jpg') }}');"></div>
                                <div class="project-overlay-gradient"></div>
                            </div>
                            <div class="project-content">
                                <span class="project-cat">Private</span>
                                <h3 class="project-title">Interior Kantor Startup Z</h3>
                                <div class="project-arrow">Lihat Detail <i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 filter government ftco-animate">
                        <div class="project-card" data-toggle="modal" data-target="#projectModal"
                            data-title="Pemeliharaan Lift Pemda" data-category="Government"
                            data-img="{{ asset('images/image_5.jpg') }}"
                            data-desc="Kontrak tahunan pemeliharaan rutin (preventive) dan perbaikan (corrective) untuk 4 unit elevator penumpang di gedung pemerintah daerah."
                            data-scope="Maintenance, Mechanical" data-status="On Going">
                            <div class="project-img-wrap">
                                <div class="project-img"
                                    style="background-image: url('{{ asset('images/image_5.jpg') }}');"></div>
                                <div class="project-overlay-gradient"></div>
                            </div>
                            <div class="project-content">
                                <span class="project-cat">Government</span>
                                <h3 class="project-title">Pemeliharaan Lift</h3>
                                <div class="project-arrow">Lihat Detail <i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 filter private ftco-animate">
                        <div class="project-card" data-toggle="modal" data-target="#projectModal"
                            data-title="Struktur Baja Pabrik Zwick" data-category="Private"
                            data-img="{{ asset('images/image_6.jpg') }}"
                            data-desc="Fabrikasi di workshop dan ereksi di site untuk struktur baja perluasan area produksi pabrik Zwick Roell."
                            data-scope="Fabrication, Erection" data-status="Finished">
                            <div class="project-img-wrap">
                                <div class="project-img"
                                    style="background-image: url('{{ asset('images/image_6.jpg') }}');"></div>
                                <div class="project-overlay-gradient"></div>
                            </div>
                            <div class="project-content">
                                <span class="project-cat">Private</span>
                                <h3 class="project-title">Struktur Baja Pabrik Zwick</h3>
                                <div class="project-arrow">Lihat Detail <i class="fa fa-arrow-right"></i></div>
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
                            <li><a href="https://instagram.com/triglobalindo.id"><span
                                        class="fab fa-instagram"></span></a></li>
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
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.058341496388!2d106.9715563147693!3d-6.256037995471469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c4f94a48cd7%3A0x6c6e3d2b2b2b2b2b!2sRuko%20Grand%20Galaxy%20City!5e0!3m2!1sid!2sid!4v1679821234567!5m2!1sid!2sid"
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

    <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-xl-custom" role="document">
            <div class="modal-content">

                <button type="button" class="btn-close-modal" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>

                <div class="modal-body-custom">
                    <div class="modal-img-col" id="modalProjectImgBg"></div>

                    <div class="modal-text-col">
                        <span class="modal-project-cat" id="modalProjectCategory">CATEGORY</span>
                        <h3 class="modal-project-title" id="modalProjectTitle">Judul Proyek</h3>

                        <div class="modal-detail-item">
                            <span class="modal-label">Deskripsi</span>
                            <p class="modal-value" id="modalProjectDesc">...</p>
                        </div>

                        <div class="modal-detail-item">
                            <span class="modal-label">Scope Pekerjaan</span>
                            <p class="modal-value" id="modalProjectScope">...</p>
                        </div>

                        <div class="modal-detail-item">
                            <span class="modal-label">Status Proyek</span>
                            <div id="modalProjectStatus" class="mt-2">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

            // FILTER
            $(".project-filter-btn").click(function() {
                var value = $(this).attr('data-filter');
                $(".project-filter-btn").removeClass("active");
                $(this).addClass("active");
                if (value == "all") {
                    $('.filter').show('1000');
                } else {
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');
                }
            });

            // MODAL DYNAMIC DATA
            $('#projectModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var title = button.data('title');
                var category = button.data('category');
                var img = button.data('img');
                var desc = button.data('desc');
                var scope = button.data('scope');
                var status = button.data('status');

                var modal = $(this);

                modal.find('#modalProjectTitle').text(title);
                modal.find('#modalProjectCategory').text(category);
                modal.find('#modalProjectDesc').text(desc);
                modal.find('#modalProjectScope').text(scope);
                modal.find('#modalProjectImgBg').css('background-image', 'url(' + img + ')');

                var statusHtml = (status === 'Finished') ?
                    '<span class="modal-status-badge bg-finished"><i class="fa fa-check-circle mr-2"></i> Finished</span>' :
                    '<span class="modal-status-badge bg-ongoing"><i class="fa fa-clock mr-2"></i> On Going</span>';
                modal.find('#modalProjectStatus').html(statusHtml);
            });

            // STATS ANIMATION
            var $section = $('.floating-stats-container');
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
