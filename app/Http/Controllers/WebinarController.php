<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Webinar;

class WebinarController extends Controller
{
    
    public function __construct()
    {
        $this->pageName = "webinar";

        $this->rootLink = "$this->pageName";
    }

    public function list()
    {
        $rootLink = $this->rootLink;

        $webinar = DB::table('webinars')->get();

        return view("$rootLink/list", 
        compact("webinar", "rootLink")
    );
    }

    public function detail($id)
    {
        $rootLink = $this->rootLink;

        $webinar = DB::table('webinars')->where("id", $id)->first();
        $select = DB::table('webinars')->paginate(4);
        $webinars = Webinar::orderBy('date', 'desc')->limit(2)->get();

        // dd($webinar->cover);
        return view("$rootLink/detail",
        compact( "webinar","webinars", "rootLink", "select"));
    }

    public function showAll()
    {
        $rootLink = $this->rootLink;

        $webinar = DB::table('webinars')->get();
        return view("$rootLink/list", compact('webinar'));
    }


    public function showSoon()
    {   
        $rootLink = $this->rootLink;

        $now = Carbon::now()->timestamp;
        $webinar = DB::table('webinars')->whereDate('date','>',now())->get();
        // dd($webinar);
        return view("$rootLink/list", compact('webinar'));
    }
    
    public function showDone()
    {   
        $rootLink = $this->rootLink;

        $now = Carbon::now()->timestamp;
        $webinar = Webinar::whereDate('date','<',now())->get();
        return view("$rootLink/list", compact('webinar'));
    }

}
