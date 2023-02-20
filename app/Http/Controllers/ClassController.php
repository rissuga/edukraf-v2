<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\ListClass;
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

        $category = DB::table('category')->get();
    
        return view("$rootLink/category",
        compact("category", "rootLink")
    );
    }

    public function list( $cat)
    {
        $class = ListClass::where('category_id', $cat)->get();
        $category = Category::find($cat);
        return view('class.list' ,compact('class','category'));
    }

    public function detail($id)
    {
        $rootLink = $this->rootLink;

        $class= ListClass::find($id);
        $select = ListClass::paginate(3);
        $category = Category::where('id', '==', $class->category_id)->get(['title_category']);

        // dd($category->title_category);
        return view("$rootLink/detail",
        compact( "class", "rootLink", "select", "category"));
    }
}
