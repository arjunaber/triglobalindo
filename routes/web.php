<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about/profile-perusahaan', function () {
    return view('profile');
});

Route::get('/about/visi-misi', function () {
    return view('visimisi');
});

Route::get('/about/tim-kami', function () {
    return view('timkami');
});

Route::get('/about/legalitas', function () {
    return view('legalitas');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});