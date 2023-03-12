<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();

        return view('index', compact('categories'));
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
    public function portofolio()
    {
        $categories = ProductCategory::all();

        return view('portofolio', compact('categories'));
    }
    public function pricelist()
    {
        return view('pricelist');
    }
    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('login');
    }
}
