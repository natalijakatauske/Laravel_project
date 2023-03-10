<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminIngredientController;
use App\Http\Controllers\Admin\AdminRecipeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('recipes', [RecipeController::class, 'index'])->name('public.recipes');
    Route::get('recipes/{id}', [RecipeController::class, 'show'])->name('public.recipe.show');
    Route::get('login', [AuthController::class, 'show'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::middleware(['auth', 'role'])->group(function () {
    Route::get('admin/recipes', [AdminRecipeController::class, 'index'])->name('admin.recipes');
    Route::get('admin/recipe/create', [AdminRecipeController::class, 'create'])->name('admin.recipe.create');
    Route::post('admin/recipe/store', [AdminRecipeController::class, 'store']);
    Route::get('admin/recipe/{id}', [AdminRecipeController::class, 'show'])->name('admin.recipe.show');
    Route::get('admin/recipe/edit/{id}', [AdminRecipeController::class, 'edit'])->name('admin.recipe.edit');
    Route::post('admin/recipe/edit/{id}', [AdminRecipeController::class, 'edit']);
    Route::delete('admin/recipe/delete/{id}', [AdminRecipeController::class, 'delete'])->name('admin.recipe.delete');

    Route::get('admin/categories', [AdminCategoryController::class, 'index'])->name('admin.categories');
    Route::get('admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('admin/category/create', [AdminCategoryController::class, 'store']);
    Route::get('admin/category/show/{id}', [AdminCategoryController::class, 'show'])->name('admin.category.show');
    Route::get('admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('admin/category/edit/{id}', [AdminCategoryController::class, 'edit']);
    Route::delete('admin/category/delete/{id}', [AdminCategoryController::class, 'delete'])->name('admin.category.delete');

    Route::get('admin/ingredients', [AdminIngredientController::class, 'index'])->name('admin.ingredients');
    Route::get('admin/ingredient/create', [AdminIngredientController::class, 'create'])->name('admin.ingredient.create');
    Route::post('admin/ingredient/create', [AdminIngredientController::class, 'store']);
    Route::get('admin/ingredient/show/{id}', [AdminIngredientController::class, 'show'])->name('admin.ingredient.show');
    Route::get('admin/ingredient/edit/{id}', [AdminIngredientController::class, 'edit'])->name('admin.ingredient.edit');
    Route::post('admin/ingredient/edit/{id}', [AdminIngredientController::class, 'edit']);
    Route::delete('admin/ingredient/delete/{id}', [AdminIngredientController::class, 'delete'])->name('admin.ingredient.delete');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('admin/profile', [UserController::class, 'show'])->name('profile');
});