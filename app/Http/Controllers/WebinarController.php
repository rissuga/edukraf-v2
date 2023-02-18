<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebinarController extends Controller
{
    //
    public function __construct()
    {
        $this->pageName = "webinar";

        $this->rootLink = "$this->pageName";
    }


    public function list()
    {
        $rootLink = $this->rootLink;

        $webinar = DB::table('webinar')->get();

        return view("$rootLink/list", 
        compact("webinar", "rootLink")
    );
    }

    public function detail()
    {
        $rootLink = $this->rootLink;

        // $webinar = DB::table('webinar')->get();
    
        return view("$rootLink/detail");
    }
}
