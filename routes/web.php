<?php

use App\Http\Controllers\Front\RecipeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('public.home');

Route::get('recipes', [RecipeController::class, 'index'])->name('public.recipes');


Route::get('admin/recipes', [AdminRecipeController::class, 'index'])->name('admin.recipes');
Route::get('admin/recipes/create', [AdminRecipeController::class, 'create'])->name('admin.recipe.create');
Route::post('admin/recipes/create', [AdminRecipeController::class, 'create']);
Route::get('admin/recipes/{id}', [AdminRecipeController::class, 'show'])->name('admin.recipe.show');
Route::get('admin/recipes/edit/{id}', [AdminRecipeController::class, 'edit'])->name('admin.recipe.edit.get');
Route::post('admin/recipes/edit/{id}', [AdminRecipeController::class, 'edit'])->name('admin.recipe.edit.post');
Route::delete('admin/recipes/delete/{id}', [AdminRecipeController::class, 'delete'])->name('admin.recipe.delete');

Route::get('admin/categories', [AdminCategoryController::class, 'index'])->name('admin.categories');
Route::get('admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
Route::post('admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create.post');
Route::get('admin/category/show/{id}', [AdminCategoryController::class, 'show'])->name('admin.category.show');
Route::get('admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit.get');
Route::post('admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit.post');
Route::delete('admin/category/delete/{id}', [AdminCategoryController::class, 'delete'])->name('admin.category.delete');