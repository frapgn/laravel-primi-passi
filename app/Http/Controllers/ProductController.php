<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function products()
    {
        // $products = new Product;
        // $products->all();
        $products = Product::all();
        // dd($products);
        // Modo 1 con array associativo
        // return view('products', ['???' => $products]);

        // modo 2 con la funzione compact()
        return view('products', compact('products'));
    }

    public function show($id)
    {
        return view('product', compact('id'));
    }
}
