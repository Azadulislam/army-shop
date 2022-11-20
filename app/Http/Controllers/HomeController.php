<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NewArrival;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Success;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth')->except('index', 'shop');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paginator = Paginator::class;
        $successes = Success::paginate(10);
        return view('home', compact('successes'));
    }

    public function shop(){
        return view('shop');
    }

    public function help(){
        return view('helps');
    }

    public function products(Request $request){

        $url = url()->full();
        $current = url()->current();

        if($request->input('type')){
            $type = $request->type;
        }
        if($request->sub_category){
            $type = $request->type;
        }
//        dd($url);
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $types = Type::all();
        return view('products', compact('categories', 'subCategories', 'types', 'url', 'current'));
    }
}
