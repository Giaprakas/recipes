<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    
    public function showrecipes()
    {
        $recipes = Recipe::all();
        return view('pages.categories', compact('recipes'));
    }

}
