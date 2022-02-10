<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    
    public function show()
    {
        $recipes = Recipe::all();
        return view('pages.categories', compact('recipes'));
    }

    public function showbyid($slug)
    {
        $recipes = Recipe::findorfail($slug);
        return view('pages.categories', compact('recipes'));
    }

    public function edit()
    {
        $recipes = Recipe::all();
        return view('pages.categories', compact('recipes'));
    }

    public function update()
    {
        $recipes = Recipe::all();
        return view('pages.categories', compact('recipes'));
    }
}
