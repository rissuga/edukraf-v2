<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public $root = null;
    public $pageName = null;
    public $rootLink = null;

    public function __construct()
    {
        $this->root = "admin";
        $this->pageName = "category";

        $this->rootLink = "$this->root/$this->pageName";
    }

    public function index()
    {
        $rootLink = $this->rootLink; // "admin/category"
        
        $category = DB::table('categories')->get();

        return view(
            "$rootLink/index",
            compact("category", "rootLink")
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
            "title_category"     => "required",
            "desc_category"      => "required",
            
        ]);

        $data = $request->all();

        DB::table("categories")->insert([
            'title_category'      => $data['title_category'],
            'desc_category'       => $data['desc_category'],
        ]);

        $this->message("Data Berhasil Ditambahkan", 'success');

        return redirect("$rootLink");
    }

    public function update($id)
    {
        $rootLink = $this->rootLink;

        $category = DB::table('categories')->where("id", $id)->first();

        return view(
            "$rootLink/update",
            compact("rootLink", "category")
        );
    }

    public function doUpdate(Request $request, $id)
    {
        $rootLink = $this->rootLink;

        $request->validate([
            "title_category"     => "required",
            "desc_category"      => "required",
        ]);

        $data = $request->all();

        DB::table("categories")
            ->where("id", $id)
            ->update([
                'title_category'      => $data['title_category'],
                'desc_category'       => $data['desc_category'],
            ]);

        $this->message("Data Berhasil Ubah", 'success');

        return redirect("$rootLink");
    }

    public function doDelete($id)
    {
        $rootLink = $this->rootLink;

        DB::table("categories")
            ->where("id", $id)
            ->delete();

        $this->message("Data Berhasil Hapus", 'success');

        return redirect("$rootLink");
    }

}
