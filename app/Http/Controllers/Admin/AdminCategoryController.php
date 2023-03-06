<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminCategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        
        return view('admin/categories/index', [
            'categories' => $categories
        ]);
        
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            ['name' => 'required|min:3|max:20']
        );

        Category::create($request->all());

        return redirect('admin/categories')
            ->with('success', 'Category created successfully!');
    }

    public function create(): View|RedirectResponse
    {
        $categories = Category::where('id', null)->get();

        return view('admin/categories/create', [
            'categories' => $categories
        ]);
    }

    public function edit(int $id, Request $request): View|RedirectResponse
    {
        $category = Category::find($id);

        if ($category === null) {
            abort(404);
        }

        if ($request->isMethod('post')) {
            $request->validate(
                ['name' => 'required|min:3|max:20']
            );

            $category->fill($request->all());
            $category->is_active = $request->post('is_active', false);
            $category->save();

            return redirect('admin/categories')->with('success', 'Category was updated successfully!');
        }

        $categories = Category::where('id', null)->get();

        return view('admin/categories/edit', [
            'category' => $category,
            'categories' => $categories,
        ]);
    }

    public function delete(int $id)
    {
        $category = Category::find($id);

        if ($category === null) {
            abort(404);
        }
        $category->delete();
        
        return redirect('admin/categories')->with('success', 'Category was removed successfully!');
    }
}
