<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/home');
});

Route::get('example', function () {
    return view('pages/example');
});

// RECIPE
Route::get('category/all', [RecipeController::class,'show']);
Route::post('category/insert', [RecipeController::class,'insert'])->name('category.insert');
Route::patch('category/update,{recipe}', [RecipeController::class,'update'])->name('category.update');
Route::delete('category/delete,{recipe}', [RecipeController::class,'delete'])->name('category.delete');

// CATEGORY
Route::get('recipes/all', [CategoryController::class,'show']);
Route::post('recipe/insert', [CategoryController::class,'insert'])->name('recipe.insert');
Route::patch('recipe/update,{category}', [CategoryController::class,'update'])->name('recipe.update');
Route::delete('recipe/delete/{category}', [CategoryController::class,'delete'])->name('recipe.delete');