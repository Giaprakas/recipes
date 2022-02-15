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
        return view('pages.recipes', compact('categories'));
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