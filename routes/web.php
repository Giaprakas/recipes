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

Route::get('recipes', function () {
    return view('pages/recipes');
});

Route::get('example', function () {
    return view('pages/example');
});

Route::get('category/all', [RecipeController::class,'show']);
Route::get('recipes/all', [CategoryController::class,'show']);

// Route::get('/category/{category}', [RecipeController::class,'showbycategory']);


Route::post('category/insert', [RecipeController::class,'insert'])->name('category.insert');
Route::post('category/update,{recipe}', [RecipeController::class,'update'])->name('category.update');
Route::post('category/delete,{recipe}', [RecipeController::class,'delete'])->name('category.delete');