<!DOCTYPE html>
<html lang="id">

<head>
    <title>Hubungi Kami - PT. Triglobalindo Berkat Utama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

        /* --- NAVBAR STYLES --- */
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

        /* --- CONTACT PAGE STYLES --- */

        .hero-wrap-2 {
            height: 450px;
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
            background: linear-gradient(135deg, rgba(21, 62, 128, 0.9), rgba(61, 118, 212, 0.8));
        }

        .hero-wrap-2 .slider-text {
            height: 400px;
        }

        /* Floating Contact Cards */
        .contact-info-wrap {
            margin-top: -80px;
            position: relative;
            z-index: 10;
        }

        .contact-card {
            background: #fff;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            border-bottom: 4px solid transparent;
            position: relative;
            cursor: pointer;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(21, 62, 128, 0.15);
            border-bottom-color: var(--brand-light-blue);
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: "";
        }

        .icon-box {
            width: 70px;
            height: 70px;
            background: rgba(61, 118, 212, 0.1);
            color: var(--brand-dark-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
            font-size: 28px;
            transition: 0.3s;
        }

        .contact-card:hover .icon-box {
            background: var(--brand-dark-blue);
            color: #fff;
        }

        .contact-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--brand-dark-blue);
            margin-bottom: 10px;
        }

        .contact-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 0;
        }

        /* Map & Form */
        .contact-form-wrap {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            min-height: 550px;
        }

        .form-control {
            height: 50px;
            border: 1px solid #e0e0e0;
            background: #fcfcfc;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }

        .form-control:focus {
            border-color: var(--brand-light-blue);
            box-shadow: none;
            background: #fff;
        }

        textarea.form-control {
            height: auto;
        }

        .map-wrap {
            height: 100%;
            min-height: 550px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(20%);
        }

        .spinner-border {
            display: none;
            margin-left: 10px;
            width: 1rem;
            height: 1rem;
        }

        /* --- SUCCESS MESSAGE STYLING --- */
        .success-overlay {
            display: none;
            /* Hidden by default */
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100%;
            background-color: #e8f0fe;
            /* Light Blue Background */
            border-radius: 12px;
            padding: 30px;
            border: 2px solid var(--brand-light-blue);
            animation: fadeIn 0.5s ease;
        }

        .success-icon {
            font-size: 60px;
            color: var(--brand-blue);
            margin-bottom: 20px;
        }

        .success-title {
            color: var(--brand-dark-blue);
            font-weight: 800;
            margin-bottom: 10px;
        }

        .countdown-timer {
            font-weight: 700;
            color: var(--brand-blue);
            font-size: 18px;
            margin-top: 15px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
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
                    <li class="nav-item"><a href="/project" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="/products" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                    <li class="nav-item active"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link nav-cta-btn text-center">Get a Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">

        <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_3.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <h1 class="mb-2 bread" style="color: #fff; font-weight: 800;">Hubungi Kami</h1>
                        <p class="breadcrumbs text-white-50">
                            <span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right ml-2"
                                        style="font-size: 10px;"></i></a></span>
                            <span>Contact</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-info-wrap ftco-no-pb">
            <div class="container">
                <div class="row justify-content-center mb-5 ftco-animate">
                    <div class="col-md-10 text-center bg-white p-4 rounded shadow-sm" style="margin-top: -50px;">
                        <p class="lead mb-0" style="color: #444; font-size: 16px;">
                            Untuk informasi lebih lanjut, konsultasi proyek, atau kebutuhan kerja sama, silakan
                            menghubungi
                            PT Triglobalindo Berkat Utama melalui kontak berikut. Tim kami siap membantu dan memberikan
                            solusi terbaik sesuai dengan kebutuhan Anda.
                        </p>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                        <div class="contact-card w-100">
                            <a href="https://maps.google.com/?q=Ruko+Grand+Galaxy+City,+Jl.+Pulo+Sirih+Barat+Raya+Blok+RSN+No.68,+Jaka+Setia,+Bekasi+Selatan"
                                target="_blank" class="stretched-link"></a>
                            <div class="icon-box"><span class="fa fa-map-marker-alt"></span></div>
                            <h3 class="contact-title">Alamat Kantor</h3>
                            <p class="contact-text">Ruko Grand Galaxy City, Jl. Pulo Sirih Barat Raya Blok RSN No.68,
                                Jaka Setia, Kec. Bekasi Selatan, Kota Bekasi, Jawa Barat</p>
                        </div>
                    </div>

                    <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                        <div class="contact-card w-100">
                            <a href="https://wa.me/6281218087689" target="_blank" class="stretched-link"></a>
                            <div class="icon-box"><span class="fa fa-phone"></span></div>
                            <h3 class="contact-title">Nomor Telepon</h3>
                            <p class="contact-text" style="font-weight: 600; color: var(--brand-light-blue);">
                                0812-1808-7689</p>
                            <p class="contact-text text-muted" style="font-size: 12px;">(WhatsApp Available)</p>
                        </div>
                    </div>

                    <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                        <div class="contact-card w-100">
                            <a href="mailto:tbugrup@gmail.com" class="stretched-link"></a>
                            <div class="icon-box"><span class="fa fa-envelope"></span></div>
                            <h3 class="contact-title">Email</h3>
                            <p class="contact-text" style="font-weight: 600; color: var(--brand-light-blue);">
                                tbugrup@gmail.com</p>
                            <p class="contact-text text-muted" style="font-size: 12px;">(Business Inquiries)</p>
                        </div>
                    </div>

                    <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                        <div class="contact-card w-100">
                            <a href="https://instagram.com/triglobalindo.id" target="_blank"
                                class="stretched-link"></a>
                            <div class="icon-box"><span class="fab fa-instagram"></span></div>
                            <h3 class="contact-title">Instagram</h3>
                            <p class="contact-text" style="font-weight: 600; color: var(--brand-light-blue);">
                                @triglobalindo.id</p>
                            <p class="contact-text text-muted" style="font-size: 12px;">(Follow Us)</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="ftco-section pt-0">
            <div class="container">
                <div class="row no-gutters justify-content-center">

                    <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                        <div class="map-wrap w-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9080680438046!2d106.97074007481041!3d-6.275817061433529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d0058e5e349%3A0xbc1aa63753554454!2sPT%20Triglobalindo%20Berkat%20Utama!5e0!3m2!1sid!2sid!4v1769259512104!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                        <div class="contact-form-wrap w-100 p-md-5 p-4">

                            <div id="form-container">
                                <h3 class="mb-4" style="color: var(--brand-dark-blue); font-weight: 700;">Kirim
                                    Pesan</h3>
                                <p class="mb-4" style="color: #666;">Silakan hubungi kami melalui formulir kontak
                                    yang
                                    tersedia atau datang langsung ke kantor kami sesuai alamat di atas.</p>

                                <form name="submit-to-google-sheet" id="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="nama">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama"
                                                    id="nama" placeholder="Nama Anda" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    id="email" placeholder="Email Anda" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="telepon">No. Telepon / WA</label>
                                                <input type="tel" class="form-control" name="telepon"
                                                    id="telepon" placeholder="0812..." required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="pesan">Pesan</label>
                                                <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="4"
                                                    placeholder="Tuliskan kebutuhan Anda..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary py-3 px-5 btn-submit"
                                                    style="background-color: var(--brand-dark-blue); border: none; font-weight: 600; width: 100%;">
                                                    Kirim Pesan
                                                    <div class="spinner-border text-light" role="status"></div>
                                                </button>
                                            </div>
                                            <div class="alert alert-danger d-none my-alert-error" role="alert">
                                                Maaf, terjadi kesalahan. Silakan coba lagi.
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="success-container" class="success-overlay">
                                <div class="success-icon">
                                    <i class="fa fa-check-circle"></i>
                                </div>
                                <h3 class="success-title">Pesan Terkirim!</h3>
                                <p style="color: #666;">Terima kasih telah menghubungi kami. Tim TBU akan segera
                                    merespons pesan Anda.</p>

                                <div class="countdown-timer">
                                    Formulir kembali dalam <span id="countdown">5</span> detik
                                </div>
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
                                        Galaxy City, Jl. Pulo Sirih Barat Raya Blok RSN No.68, Jaka Setia, Kec. Bekasi
                                        Selatan, Kota Bekasi, Jawa Barat.</span></li>
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
        });

        // --- SCRIPT FORM KE GOOGLE SHEETS DENGAN SUCCESS SCREEN ---
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbwgRAmRD53vY5bfYtMFCjXt_ph8ezO57lTTKglY59UJx4AYAyjO7A0vWywqLqo7v9Gk/exec';

        const form = document.forms['submit-to-google-sheet'];
        const btnSubmit = document.querySelector('.btn-submit');
        const btnLoading = document.querySelector('.spinner-border');
        const myAlertError = document.querySelector('.my-alert-error');

        const formContainer = document.getElementById('form-container');
        const successContainer = document.getElementById('success-container');
        const countdownElement = document.getElementById('countdown');

        if (form) {
            form.addEventListener('submit', e => {
                e.preventDefault();

                // 1. Tampilkan Loading
                btnLoading.style.display = "inline-block";
                myAlertError.classList.add('d-none'); // Sembunyikan error lama

                fetch(scriptURL, {
                        method: 'POST',
                        body: new FormData(form)
                    })
                    .then(response => {
                        // 2. Berhasil
                        btnLoading.style.display = "none";
                        form.reset();
                        console.log('Success!', response);

                        // 3. Ganti Tampilan ke Pesan Sukses
                        formContainer.style.display = "none";
                        successContainer.style.display = "flex";

                        // 4. Hitung Mundur 5 Detik
                        let timeLeft = 5;
                        countdownElement.innerText = timeLeft;

                        const timer = setInterval(() => {
                            timeLeft--;
                            countdownElement.innerText = timeLeft;

                            if (timeLeft <= 0) {
                                clearInterval(timer);
                                // 5. Kembalikan Form
                                successContainer.style.display = "none";
                                formContainer.style.display = "block";
                            }
                        }, 1000);
                    })
                    .catch(error => {
                        // 3. Gagal
                        btnLoading.style.display = "none";
                        myAlertError.classList.remove('d-none');
                        console.error('Error!', error.message);
                    });
            });
        }
    </script>
</body>

</html>
