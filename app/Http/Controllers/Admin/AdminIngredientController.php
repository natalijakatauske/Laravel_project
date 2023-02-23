<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Ingredient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminIngredientController extends Controller
{
    public function index(): View
    {
        $ingredients = Ingredient::where('is_active', '=', 1);

        return view('admin/ingredients/index', [
            'ingredients' => $ingredients->paginate(10)
        ]);
    }

    // public function show(Ingredient $ingredient): View
    // {
    //     return view('admin/ingredient/show', compact('ingredient'));
    // }

    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            ['name' => 'required|min:3|max:20']
        );

        Ingredient::create($request->all());

        return redirect('admin/ingredients')
            ->with('success', 'Category created successfully!');
    }

    public function create(): View|RedirectResponse
    {
        $ingredients = Ingredient::where('id', null)->get();

        return view('admin/ingredients/create', [
            'ingredients' => $ingredients
        ]);
    }

    public function edit(int $id, Request $request): View|RedirectResponse
    {
        $ingredient = Ingredient::find($id);
        if ($ingredient === null) {
            abort(404);
        }

        if ($request->isMethod('post')) {
            $request->validate(
                ['name' => 'required|min:3|max:20']
            );

            $ingredient->fill($request->all());
            // $ingredient->is_active = $request->post('is_active');
            $ingredient->save();

            return redirect('admin/ingredients')->with('success', 'Category updated successfully!');
        }

        $ingredients = Ingredient::where('id', null)->get();

        return view('admin/ingredients/edit', [
            'ingredient' => $ingredient,
            'ingredients' => $ingredients,
        ]);

        // return view('admin/ingredients/edit', compact('ingredients'));
    }

    public function delete(int $id)
    {
        $ingredient = Ingredient::find($id);

        if ($ingredient === null) {
            abort(404);
        }
        $ingredient->delete();
        
        return redirect('admin/ingredients')->with('success', 'Category removed successfully!');
    }
}
