<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    //
     public function index()
    {
        $products = Product::inRandomOrder()->take(5)->get();

        return view('Shop')->with('products',$products);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product =Product::where('slug',$slug)->firstOrFail();

        return view('product')->with('product',$product);
    }

 

}
