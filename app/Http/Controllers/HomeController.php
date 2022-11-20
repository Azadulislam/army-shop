<?php

namespace App\Http\Controllers;

use App\Models\NewArrival;
use App\Models\Product;
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
        $arrivals = Product::paginate(10);
        return view('home');
    }

    public function shop(){
        return view('shop');
    }

    public function help(){
        return view('helps');
    }

    public function products(){
        return view('products');
    }
}
