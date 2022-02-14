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
}