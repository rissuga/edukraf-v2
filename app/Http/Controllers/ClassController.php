<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public $root = null;
    public $pageName = null;
    public $rootLink = null;

    public function __construct()
    {
        $this->pageName = "class";

        $this->rootLink = "$this->pageName";
    }


    public function index()
    {
        $rootLink = $this->rootLink;

        // $webinar = DB::table('webinar')->get();
    
        return view("$rootLink/category");
    }

    public function list()
    {
        $rootLink = $this->rootLink;

        // $webinar = DB::table('webinar')->get();
    
        return view("$rootLink/list");
    }

    public function detail()
    {
        $rootLink = $this->rootLink;

        // $webinar = DB::table('webinar')->get();
    
        return view("$rootLink/detail");
    }
}
