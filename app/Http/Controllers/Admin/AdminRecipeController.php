<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Ingredient;
use App\Models\Front\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdminRecipeController extends Controller
{
    public function index(Request $request): View
    {
        $recipes = Recipe::query();
        
        if ($request->query('name')) {
            $recipes->where('name', 'like', '%' . $request->query('name') . '%');
        }
        if ($request->query('category_id')) {
            $recipes->where('category_id', '=', $request->query('category_id'));
        }

        $categories = Category::where('is_active', '=', 1)->get();
        $ingredients = Ingredient::where('is_active', '=', 1)->get();

        return view('admin/recipes/index', [
            'recipes' => $recipes->paginate(10),
            'categories' => $categories,
            'ingredients' => $ingredients,
            'category_id' => $request->query('category_id'), 
            'name' => $request->query('name'), 
        ]);
    }


    public function create(): View
    {
        $ingredients = Ingredient::all();
        $categories = Category::where('is_active', '=', 1)->get();

        return view('admin.recipes.create', [
            'ingredients' => $ingredients,
            'categories' => $categories,
        ]);
    }

    public function edit(int $id, Request $request)
    {
        $recipe = Recipe::find($id);
        $ingredients = Ingredient::all();
        $categories = Category::where('is_active', '=', 1)->get();

        if ($recipe === null) {
            abort(404);
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|max:255',
                'category_id' => 'required',
                'ingredient_id' => 'required',
                'image' => [File::types([
                    'jpg', 'jpeg', 'jfif', 'webp', 'avif', 'svg', 'gif', 'png', 'tif', 'tiff', 'bmp'
                ])],
                ]);
            
                $recipe->uptade($request->all());
                $recipe->ingredients()->detach();

                $file = $request->file('image');
                $path = $file->store('recipe_images');
                Storage::disk('public')->put('katalogas', $file);
                $recipe->image = $path;
                $recipe->save();
        
                $ingredients = Ingredient::find($request->post('ingredient_id'));
                $recipe->ingredients()->attach($ingredients);
        
                return redirect('admin.recipes')->with('success', 'Recipe uptades successfully!!!');        
        }
       
        return view('admin.recipes.edit', [
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request): RedirectResponse|View
    {
        $request->validate([
            'name' =>'required|max:255',
            'category_id' => 'required',
            'image' => [File::types([
                'jpg', 'jpeg', 'jfif', 'webp', 'avif', 'svg', 'gif', 'png', 'tif', 'tiff', 'bmp'
            ])],
            ]);

        $recipe = Recipe::create($request->all());

        $file = $request->file('image');
        $path = Storage::disk('public')->put('recipe_images', $file);
        $recipe->image = $path;
        $recipe->save();

        $ingredients = Ingredient::find($request->post('ingredient_id'));
        $recipe->ingredients()->attach($ingredients);



    }
}
