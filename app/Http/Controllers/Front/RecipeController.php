<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Ingredient;
use App\Models\Front\Category;
use App\Models\Front\Recipe;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(Request $request): View
    {
        $recipes = Recipe::where('is_active', '=', 1);
        
        if ($request->query('name')) {
            $recipes->where('name', 'like', '%' . $request->query('name') . '%');
        }
        if ($request->query('category_id')) {
            $recipes->where('category_id', '=', $request->query('category_id'));
        }

        $categories = Category::where('is_active', '=', 1)->get();

        return view('front/index', [
            'recipes' => $recipes->paginate(9),
            'categories' => $categories,
            'category_id' => $request->query('category_id'), 
            'name' => $request->query('name'), 
        ]);
    }

    public function show($id): View
    {
        $recipe = Recipe::find($id);

        if ($recipe === null) {
            abort(404);
        }

        return view('front/show', [
            'recipe' => $recipe
        ]);
    }
}

