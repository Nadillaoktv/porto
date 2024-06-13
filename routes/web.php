<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/quality', function () {
    return view('quality');
});

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});


