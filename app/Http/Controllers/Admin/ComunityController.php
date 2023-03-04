<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ComunityController extends Controller
{
    public $root = null;
    public $pageName = null;
    public $rootLink = null;

    public function __construct()
    {
        $this->root     = "admin";
        $this->pageName = "comunity";

        $this->rootLink = "$this->root/$this->pageName";
    }

    public function index()
    {
        $rootLink = $this->rootLink; // "admin/comunity"
        
        $comunity = DB::table('comunities')->get();

        return view(
            "$rootLink/index",
            compact("comunity", "rootLink")
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
            "name"     => "required",
            "platform" => "required",
            "link"     => "required",
            
        ]);

        $data = $request->all();

        DB::table("comunities")->insert([
            'name'      => $data['name'],
            'platform'  => $data['platform'],
            'link'      => $data['link'],
        ]);

        $this->message("Data Berhasil Ditambahkan", 'success');

        return redirect("$rootLink");
    }

    public function update($id)
    {
        $rootLink = $this->rootLink;

        $comunity = DB::table('comunities')->where("id", $id)->first();

        return view(
            "$rootLink/update",
            compact("rootLink", "comunity")
        );
    }

    public function doUpdate(Request $request, $id)
    {
        $rootLink = $this->rootLink;

        $request->validate([
            "name"     => "required",
            "platform" => "required",
            "link"     => "required",
        ]);

        $data = $request->all();

        DB::table("comunities")
            ->where("id", $id)
            ->update([
                'name'      => $data['name'],
                'platform'  => $data['platform'],
                'link'      => $data['link'],
            ]);

        $this->message("Data Berhasil Ubah", 'success');

        return redirect("$rootLink");
    }

    public function doDelete($id)
    {
        $rootLink = $this->rootLink;

        DB::table("comunities")
            ->where("id", $id)
            ->delete();

        $this->message("Data Berhasil Hapus", 'success');

        return redirect("$rootLink");
    }



}
