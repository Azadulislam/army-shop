<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\SubCategory;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
        $products = Product::paginate(12);
        if($request->subcategory || $request->type){
            $products = Product::all();
            if(isset($request->subcategory)){
                $products = $products->where('sub_category_id','=', SubCategory::where('slug', 'LIKE', $request->subcategory)->first()->id);
            }
            if(isset($request->type)){
                $products = $products->where('type_id','=', Type::where('slug', 'LIKE', $request->type)->first()->id);
            }
        }

//        $paginator = new Paginator($products, 2);
//        dd($paginator);

        return view('products', compact('categories', 'subCategories', 'types', 'url', 'current', 'products', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug','=', $slug)->first();
        return view('product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
