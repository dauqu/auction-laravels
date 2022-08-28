<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Events\Auctions;

class ProductsController extends Controller
{
    //Blade Template
    public function homeTemp()
    {
        $data = Products::all();
        return view('products', ['data' => $data]);
    }

    public function getbycaegory($category)
    {
        $data = Products::where('category', $category)->get();
        return view('home', ['data' => $data]);
    }

    //Get Product Details by Slug
    public function show($slug)
    {
        $data = Products::where('slug', $slug)->first();
        return view('product');
    }



    public function index()
    {
        return Products::all();
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
            'vendor' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'status' => 'required',
            'price' => 'required',
            'sku' => 'required',
            'brand_name' => 'required',
            'quantity' => 'required',
            'featured' => 'required',
            'active' => 'required',
            'condition' => 'required',
            'type' => 'required',
            'category' => 'required',
        ]);
        Products::create($request->all());
        $products = Products::all();
        event(new Auctions($products));
        //Return Array 
        return response()->json(['message' => 'Product Created Successfully', 'status' => 'sccuss'], 200);
    }

    // public function show($id)
    // {
    //     $product = Products::find($id);
    //     return view('products.show', compact('product'));
    // }

    public function edit($id)
    {
        $product = Products::find($id);
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
            'vendor' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'status' => 'required',
            'price' => 'required',
            'sku' => 'required',
            'brand_name' => 'required',
            'quantity' => 'required',
            'featured' => 'required',
            'active' => 'required',
            'condition' => 'required',
            'type' => 'required',
            'category' => 'required',
        ]);
        Products::find($id)->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        Products::find($id)->delete();
        $products = Products::all();
        event(new Auctions($products));
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
