<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\Recipe;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(): View
    {
        $recipes = Recipe::paginate(20);

        return view('recipes/index', [
            'recipes' => $recipes
        ]);
    }

    // public function index(Request $request): View
    // {
    //     $recipes = Recipe::query();
        
    //     if ($request->query('name')) {
    //         $recipes->where('name', 'like', '%' . $request->query('name') . '%');
    //     }
    //     if ($request->query('category_id')) {
    //         $recipes->where('category_id', '=', $request->query('category_id'));
    //     }

    //     $categories = Category::where('is_active', '=', 1)->get();
    //     $ingredients = Ingredient::where('is_active', '=', 1)->get();

    //     return view('admin/recipes/index', [
    //         'recipes' => $recipes->paginate(10),
    //         'categories' => $categories,
    //         'ingredients' => $ingredients,
    //         'category_id' => $request->query('category_id'), 
    //         'name' => $request->query('name'), 
    //     ]);
    // }
}

// $path = Storage::disk('public')->putFile('book_image', new File($request->file('image')));
