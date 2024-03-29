<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Webinar;

class WebinarController extends Controller
{

    public $root = null;
    public $pageName = null;
    public $rootLink = null;

    public function __construct()
    {
        $this->root     = "admin";
        $this->pageName = "webinar";

        $this->rootLink = "$this->root/$this->pageName";
    }

    public function index() {
        $rootLink = $this->rootLink;

        $webinar  = DB::table('webinars')->get();
        
        return view(
            "$rootLink/index",
            compact("webinar", "rootLink")
        );
    }

    public function add()
    {
        $rootLink = $this->rootLink;

        return view(
            "$rootLink/add",
            compact("rootLink")
        );
    }

    public function doAdd(Request $request)
    {
        $rootLink = $this->rootLink;

        
        $request->validate([
            "title"            => "required",
            "speaker"          => "required",
            "date"             => "required",
            "link_webinar"     => "required",
            "time_start"       => "required",
            "time_end"         => "required",
            "cover"            => "required",
            "desc"             => "required",
        ]);


        $data = $request->all();
        
        if ($request->hasFile('cover')) {
            $path= $request->file('cover')->store('webinarfoto');
        } else {
            $path= ' ';
        }


        DB::table("webinars")->insert([
            'title'        => $data['title'],
            'date'         => $data['date'],
            'desc'         => $data['desc'],
            'time_start'   => $data['time_start'],
            'time_end'     => $data['time_end'],
            'link_record'  => $data['link_record'],
            'link_webinar' => $data['link_webinar'],
            'speaker'      => $data['speaker'],
            'cover'        => $path,
        ]);

        $this->message("Data Berhasil Ditambahkan", 'success');

        return redirect("$rootLink");
    }


    public function update($id)
    {
        $rootLink = $this->rootLink;

        $webinar = DB::table('webinars')->where("id", $id)->first();

        return view(
            "$rootLink/update",
            compact("rootLink", "webinar")
        );
    }

    public function doUpdate(Request $request, $id)
    {
        $rootLink = $this->rootLink;

        $request->validate([
            "title"            => "required",
            "speaker"          => "required",
            "date"             => "required",
            "link_webinar"     => "required",
            "time_start"       => "required",
            "time_end"         => "required",
            "cover"            => "required",
            "desc"             => "required",
        ]);

        $data = $request->all();

        if ($request->hasFile('cover')) {
            $path= $request->file('cover')->store('webinarfoto');
        } else {
            $path= ' ';
        }
       
        DB::table("webinars")
        ->where("id", $id)
        ->update([
                'title'        => $data['title'],
                'date'         => $data['date'],
                'desc'         => $data['desc'],
                'time_start'   => $data['time_start'],
                'time_end'     => $data['time_end'],
                'link_record'  => $data['link_record'],
                'link_webinar' => $data['link_webinar'],
                'speaker'      => $data['speaker'],
                'cover'        => $path
            ]);

        $this->message("Data Berhasil Ubah", 'success');

        return redirect("$rootLink");
    }

    public function doDelete($id)
    {
        $rootLink = $this->rootLink;

        DB::table("webinars")
            ->where("id", $id)
            ->delete();

        $this->message("Data Berhasil Hapus", 'success');

        return redirect("$rootLink");
    }
}
