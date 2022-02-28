<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use DB;


class IngredientsController extends Controller
{
    public function show()
    {
        $ingredients = Ingredient::all();
        return view('pages.ingredients', compact('ingredients'));
    }

    public function insert(Request $request)
    {
        $ingredient = new Ingredient;
        $ingredient->name = request('name');
        $ingredient->measure_unit = request('measure_unit');
        $ingredient->save();
        return back();
    }

    public function update(Request $request, Ingredient $ingredient)
    {
        $ingredient->name = request('name');
        $ingredient->measure_unit = request('measure_unit');
        $ingredient->save();
        return back();
    }

    public function delete(Request $request, Ingredient $ingredient)
    {
        $ingredient->delete();
        return back();
    }
}
