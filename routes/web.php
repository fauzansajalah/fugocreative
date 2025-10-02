<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('topmenu.home'); 
})->name('home');

// About Us
Route::get('/about', function () {
    return view('topmenu.about');
})->name('about');

// Services
Route::get('/services', function () {
    return view('topmenu.services');
})->name('services');

// Contact
Route::get('/contact', function () {
    return view('topmenu.contact');
})->name('contact');

// Navigator (langsung di resources/views/)
Route::get('/navigator', function () {
    return view('navigator'); 
})->name('navigator');

// routes/web.php
Route::get('/portofolio', function () {
    return view('topmenu.portofolio'); // menyesuaikan folder dan nama file
})->name('portofolio');
