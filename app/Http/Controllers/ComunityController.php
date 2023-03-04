<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ComunityController extends Controller
{
    //

    public function index()
    {
        // $rootLink = $this->rootLink;

        $comunity = DB::table('comunities')->get();

        return view(
            "komunitas",
            compact("comunity")
         );

    }
}
