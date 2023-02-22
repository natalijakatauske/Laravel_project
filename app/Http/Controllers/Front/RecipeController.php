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
}

// $path = Storage::disk('public')->putFile('book_image', new File($request->file('image')));
