<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

class HomeController extends Controller
{
    //Get Products
    public function home()
    {
        $products = Products::all();
        $categories = Categories::all();
        return view('home', ['products' => $products, 'categories' => $categories]);
    }



    //Get Products by Category
    public function productsByCategory($category)
    {
        $data = Products::where('category', $category)->get();
        return view('home', ['products' => $data]);
    }
}
