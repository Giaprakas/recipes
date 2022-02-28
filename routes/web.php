<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\AjaxController;
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


////// !!VIEWS!! //////
Route::view('/', 'pages/home');

////// !!CATEGORY!! //////
Route::controller(CategoryController::class)->group(function() {
    Route::get('category/', 'show');
    Route::get('category/{category}', 'showbyid');
    Route::post('category/insert', 'insert')->name('category.insert');
    Route::patch('category/update/{category}', 'update')->name('category.update');
    Route::delete('category/delete/{category}', 'delete')->name('category.delete');
});


////// !!INGREDIENTS!! //////
Route::controller(IngredientsController::class)->group(function() {
    Route::get('ingredients/', 'show');
    Route::post('ingredients/insert', 'insert')->name('ingredient.insert');
    Route::patch('ingredients/update,{ingredient}', 'update')->name('ingredient.update');
    Route::delete('ingredients/delete,{ingredient}', 'delete')->name('ingredient.delete');
});


////// !!RECIPE!! //////
Route::prefix('recipes')->controller(RecipeController::class)->group(function() {
    Route::get('/', 'show');
    Route::post('/insert', 'insert')->name('recipe.insert');
    Route::patch('/update/{recipe}', 'update')->name('recipe.update');
    Route::delete('/delete/{recipe}', 'delete')->name('recipe.delete');
});


////// !!PRODUCTS!! //////
Route::get('products/', [ProductController::class,'show']);
Route::post('products/insert', [ProductController::class,'insert'])->name('product.insert');
Route::patch('products/update,{product}', [ProductController::class,'update'])->name('product.update');
Route::delete('products/delete,{product}', [ProductController::class,'delete'])->name('product.delete');


////// AJAX //////
Route::get('/get/ingredients', [AjaxController::class,'get_ingredients'])->name('get.ingredients');
Route::get('/get/category', [AjaxController::class,'get_category'])->name('get.category');