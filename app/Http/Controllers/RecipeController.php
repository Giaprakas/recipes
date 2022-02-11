<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
use DB;

class RecipeController extends Controller
{
    
    public function show()
    {
        $recipes = Recipe::all();
        return view('pages.category', compact('recipes'));
    }

    public function insert(Request $request)
    {
        $recipe = new Recipe;
        $recipe->title = request('title');
        $recipe->category_id = request('category_id');
        $recipe->body = request('body');
        $recipe->save();
        return back();
    }

    public function update(Request $request, Recipe $recipe)
    {
        dd($recipe);
        // dd($request)->all();
        $recipe->title = request('title');
        $recipe->category_id = request('category_id');
        $recipe->body = request('body');
        $recipe->save();
        return back();
    }

    public function delete(Recipe $recipe)
    {
        // $recipe = Recipe::find($id);
        $recipe->delete();
        return back();
    }
}
