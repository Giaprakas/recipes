<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

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

Route::get('/recipes', function () {
    return view('pages/recipes');
});

Route::get('/example', function () {
    return view('pages/example');
});

// Route::get('/categories', function () {
//     return view('pages/categories');
// });

Route::get('/categories', [RecipeController::class,'show']);
Route::get('/categories/{id}', [RecipeController::class,'showbyid']);
// Route::get('/categories/{id}/edit', [RecipeController::class,'edit']);
// Route::post('/categories/{id}', [RecipeController::class,'update']);