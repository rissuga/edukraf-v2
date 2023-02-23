<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Classroom;
use App\Models\Category;
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

        $category = DB::table('categories')->get();
    
        return view(
            "$rootLink/category",
            compact("category", "rootLink")
        );
    }

    public function list( $cat)
    {
        $rootLink = $this->rootLink;

        $class = Classroom::where('category_id', $cat)->get();
        $category = Category::find($cat);
        return view(
            "$rootLink/list",
            compact('class','category', "rootLink")
        );
    }

    public function detail($id)
    {   
        $rootLink = $this->rootLink;

        $class= Classroom::find($id);
        $select = Classroom::paginate(3);
        $category = Category::where('id', '==', $class->category_id)->get(['title_category']);

        // dd($category->title_category);
        return view(
            "$rootLink/detail",
            compact( "class", "rootLink", "select", "category")
        );
    }
}
