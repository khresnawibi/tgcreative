<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function blog()
    {
        return view('blog');
    }
    public function about()
    {
        return view('about');
    }
    public function team()
    {
        return view('team');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function services()
    {
        return view('services');
    }
    public function portofolio(){
        return view('portofolio');
    }
    public function pricelist(){
        return view('pricelist');
    }
    public function contact(){
        return view('contact');
    }
    public function login(){
        return view('login');
    }

    //ADMIN
    public function starter(){
        return view('admin.starter');
    }
}
