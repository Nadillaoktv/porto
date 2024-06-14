<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PortoControllers;

Route::get('/', function(){
    return view('home');
});

Route::get('/home', [PortoControllers::class, 'indexHome']);
Route::get('/about', [PortoControllers::class, 'indexAbout']);
Route::get('/blog', [PortoControllers::class, 'indexBlog']);
Route::get('/quality', [PortoControllers::class, 'indexQuality']);
Route::get('/portofolio', [PortoControllers::class, 'indexPortofolio']);
Route::get('/review', [PortoControllers::class, 'indexReview']);
Route::get('/skill', [PortoControllers::class, 'indexSkill']);
Route::get('/service', [PortoControllers::class, 'indexService']);
Route::get('/contact', [PortoControllers::class, 'indexContact']);