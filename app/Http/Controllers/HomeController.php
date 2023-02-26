<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Classroom;
use App\Models\Webinar;


class HomeController extends Controller
{
    public function index()
    {
        $webinar  = Webinar::orderBy('date', 'desc')->limit(8)->get();
        $category = Category::all();
        $class    = Classroom::orderBy('created_at', 'asc')->limit(5)->get();
        
        return view(
            'beranda', 
            compact('webinar', 'category', 'class')
        );
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
