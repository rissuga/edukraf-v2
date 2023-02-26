<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Classroom;
use Illuminate\Support\Facades\DB;


class ClassController extends Controller
{
    public $root = null;
    public $pageName = null;
    public $rootLink = null;

    public function __construct()
    {
        $this->root = "admin";
        $this->pageName = "list-class";

        $this->rootLink = "$this->root/$this->pageName";
    }

    public function index()
    {
        $rootLink = $this->rootLink; // "admin/list-class"
        
        $list_class = Classroom::with('Category')->get();

        return view(
            "$rootLink/index",
            compact("list_class", "rootLink")
        );
    }

    public function add()
    {
        $rootLink = $this->rootLink; // "admin/list-class"

        $category = Category::select('id','title_category')->get();

        return view(
            "$rootLink/add", 
            compact("category", "rootLink"));
    }

    public function doAdd(Request $request)
    {
        $rootLink = $this->rootLink;

        $request->validate([
            "title"        => "required",
            "category_id"  => "required",
            "desc"         => "required",
            "link"         => "required",
            "source"       => "required",
        ]);

        $data = $request->all();

        DB::table("classes")->insert([
            'title'        => $data['title'],
            'category_id'  => $data['category_id'],
            'desc'         => $data['desc'],
            'link'         => $data['link'],
            'source'       => $data['source'],
        ]);

        $this->message("Data Berhasil Ditambahkan", 'success');

        return redirect("$rootLink");
    }

    public function update($id)
    {
        $rootLink = $this->rootLink;

        $list_class = Classroom::find($id);
        $category = Category::where('id', '!=', $list_class->category_id)->get(['id', 'title_category']);
        
        return view(
            "$rootLink/update",
            compact("rootLink","list_class", "category"));
    }

    public function doUpdate(Request $request, $id)
    {
        $rootLink = $this->rootLink;

        $request->validate([
            "title"       => "required",
            "category_id" => "required",
            "link"        => "required",
            "source"      => "required",
            "desc"        => "required",
        ]);

        $data = $request->all();

        DB::table("classes")
            ->where("id", $id)
            ->update([
                'title'       => $data['title'],
                'category_id' => $data['category_id'],
                'link'        => $data['link'],
                'source'      => $data['source'],
                'desc'        => $data['desc'],
            ]);

        $this->message("Data Berhasil Ubah", 'success');

        return redirect("$rootLink");
    }

    public function doDelete($id)
    {
        $rootLink = $this->rootLink;

        DB::table("classes")
            ->where("id", $id)
            ->delete();

        $this->message("Data Berhasil Hapus", 'success');

        return redirect("$rootLink");
    }
}
