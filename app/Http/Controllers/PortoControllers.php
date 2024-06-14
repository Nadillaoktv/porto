<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoControllers extends Controller
{
    public function index() {
        return view('master');
    }
    public function indexHome() {
        return view('home');
    }
    public function indexAbout() {
        return view('about');
    }
    public function indexBlog() {
        return view('blog');
    }
    public function indexQuality() {
        return view('quality');
    }
    public function indexPortofolio() {
        return view('portofolio');
    }
    public function indexReview() {
        return view('review');
    }
    public function indexSkill() {
        return view('skill');
    }
    public function indexService() {
        return view('service');
    }
    public function indexContact() {
        return view('contact');
    }
}
