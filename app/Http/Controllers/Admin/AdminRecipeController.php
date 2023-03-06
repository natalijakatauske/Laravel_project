<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Ingredient;
use App\Models\Admin\IngredientsRecipe;
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

    public function show($id): View
    {
        $recipe = Recipe::find($id);

        if ($recipe === null) {
            abort(404);
        }

        return view('admin/recipes/show', [
            'recipe' => $recipe
        ]);
    }


    public function create(): View
    {
        $ingredients = Ingredient::all();
        $categories = Category::all();

        return view('admin/recipes/create', [
            'ingredients' => $ingredients,
            'categories' => $categories,
        ]);
    }

    public function edit(int $id, Request $request): View|RedirectResponse
    {
        $recipe = Recipe::find($id);

        $ingredients = Ingredient::all();
        $categories = Category::all();

        if ($recipe === null) {
            abort(404);
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|max:50',
                'category_id' => 'required',
                'ingredient_id' => 'required',
                ]);
            
            $recipe->fill($request->all());
            $recipe->ingredients()->detach();
            $recipe->ingredients()->attach($request->post('ingredient_id'));
            $recipe->is_active = $request->post('is_active', false);

            $image = $request->file('image');
            if ($image) {
                $path = Storage::disk('public')->put('recipe_images', $image);
                $recipe->image = $path;
            }
            
            $recipe->save();
        
            return redirect('admin/recipes')->with('success', 'Recipe uptades successfully!!!');        
        }
       
        return view('admin/recipes/edit', [
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' =>'required|max:50',
            'category_id' => 'required',
            'description' => 'required|min:5',
            'image' => 'required', [File::types(['jpg', 'wav'])
                ->min(1024)
                ->max(12*1024)],
            ]);

        $recipe = Recipe::create($request->all());
        $recipe->is_active = $request->post('is_active', false);

        $image = $request->file('image');
        if ($image) {
            $path = Storage::disk('public')->put('recipe_images', $image);
            $recipe->image = $path;
            $recipe->save();
        }

        $ingredients = Ingredient::find($request->post('ingredient_id'));
        $recipe->ingredients()->attach($ingredients);
        $recipe->is_active = $request->post('is_active', false);

        return redirect('admin/recipes')->with('success', 'Recipe was created successfully!');
    }

    public function delete(int $id)
    {
        $recipe = Recipe::find($id);
        $recipe->ingredients()->detach();

        if ($recipe === null) {
            abort(404);
        }
        $recipe->delete();
        
        return redirect('admin/recipes')->with('success', 'Recipe was removed successfully!');
    }
}
