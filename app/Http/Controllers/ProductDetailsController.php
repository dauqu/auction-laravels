<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductDetailsController extends Controller
{
    //Get product details 
    // public function show($slug)
    // {
    //     $product = Products::where('slug', $slug)->firstOrFail();
    //     return view('product_details', ['product' => $product]);
    // }

    public function show($slug)
    {
        $product = Products::where('slug', $slug)->firstOrFail();
        return view('product_details', ['product' => $product]);
    }
}
