<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("beranda");
    }

    public function ensiklopedia()
    {
        return view("ensiklopedia");
    }

    public function komunitas()
    {
        return view("komunitas");
    }

    public function aboutUs()
    {
        return view("about-us");
    }
    
}
