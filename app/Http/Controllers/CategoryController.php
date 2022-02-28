<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function show()
    {
        $categories = Category::all();
        return view('pages.category', compact('categories'));
    }

    
    public function showbyid(Category $category)
    {
        $category->load(['recipes']); //loads the recipes of this category at calling and not later on foreach 
        return view('pages.categorybyid', compact('category'));
    }

    public function insert(Request $request)
    {
        $category = new Category;
        $category->name = request('name');
        $category->save();
        return back();
    }

    public function update(Request $request, Category $category)
    {
        $category->name = request('name');
        $category->save();
        return back();
    }

    public function delete(Request $request, Category $category)
    {
        $category->delete();
        return back();
    }
}