<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ingredient;

class AjaxController extends Controller
{
    public function get_ingredients()
    {
        return Ingredient::all();
    }
    public function get_category()
    {
        return Category::all();
    }
}
