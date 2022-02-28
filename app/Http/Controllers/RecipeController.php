<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Ingredient;

class RecipeController extends Controller
{
    
    public function show(Request $request)
    {
        $recipes = Recipe::all();
        return view('pages.recipes', compact('recipes'));
    }

    public function insert(Request $request)
    {
        
        $recipe = new Recipe;
        $recipe->title = $request->title;
        $recipe->slug = $request->slug;
        $recipe->category_id = $request->category_id;
        $recipe->body = $request->body;
        $recipe->save();
        //pivot
        // dd($request->ingredient_id, $request->amount);
        foreach ($request->ingredient_id as $ingredient) {
            $recipe->ingredients()->attach($ingredient,['amount' => $request->amount[$ingredient]]);
        }
        return back();
    }

    public function update(Request $request, Recipe $recipe)
    {
        $recipe->title = request('title');
        $recipe->slug = request('slug');
        $recipe->category_id = request('category_id');
        $recipe->body = request('body');
        // dd(request('ingredient_id'),request('amount'));
        $recipe->save();
        //pivot
        foreach (request('ingredient_id') as $ingredient) {
            $recipe->ingredients()->sync([$ingredient => ['amount' => $request->amount[$ingredient]]],false); //false, dont delete old records syncWithoutDetach()
        }
        return back();
    }

    public function delete(Recipe $recipe)
    {
        $recipe->ingredients()->detach();
        $recipe->delete();
        return back();
    }
}