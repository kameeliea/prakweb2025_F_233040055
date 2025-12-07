<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Category::create(['name' => $request->name]);
        return redirect('/dashboard/categories')->with('success', 'Category dibuat');
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate(['name' => 'required']);
        $category->update(['name' => $request->name]);
        return redirect('/dashboard/categories')->with('success', 'Category diupdate');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Category dihapus');
    }
}
