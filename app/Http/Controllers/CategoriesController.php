<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{

    //APIs for Categories
    public function index()
    {
        return Categories::all();
    }

    public function store(Request $request)
    {
        // Categories::create($request->all());
        return Categories::create($request->all());
    }

    public function show($id)
    {
        return Categories::find($id);
    }
    public function edit($id)
    {
        $category = Categories::find($id);
        return response()->json(['message' => 'Category Found Successfully', 'status' => 'sccuss', 'category' => $category], 200);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        Categories::find($id)->update($request->all());
        return response()->json(['message' => 'Category Updated Successfully', 'status' => 'sccuss'], 200);
    }

    public function destroy($id)
    {
        //Delete Category
        Categories::find($id)->delete();
    }
    
}
