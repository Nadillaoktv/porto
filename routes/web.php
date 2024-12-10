<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PortoControllers;

Route::get('/', function(){
    return view('home');
});

Route::get('/home', [PortoControllers::class, 'indexHome']);
Route::get('/about', [PortoControllers::class, 'indexAbout']);
Route::get('/quality', [PortoControllers::class, 'indexQuality']);
Route::get('/skill', [PortoControllers::class, 'indexSkill']);
Route::get('/contact', [PortoControllers::class, 'indexContact']);
