<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        //$allProducts = Product::where('quantity', '>=', 2)->where('price', '>=', 2.00)->get();
        //$lowQty = Product::lowQty();
        //dd($lowQty);
        $allProducts = Product::all();
        return view('products/index', ['products' => $allProducts]);
    }

    public function detail($id){
        $productDetails = Product::where('id', '=', $id)->firstOrFail();
        return view('products/detail', ['product' => $productDetails]);
    }
}
