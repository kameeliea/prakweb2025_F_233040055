<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // ambil semua kategori termasuk relasi posts jika perlu jumlah
        $categories = Category::with('posts')->get();
        return view('categories', compact('categories'));
    }
}
