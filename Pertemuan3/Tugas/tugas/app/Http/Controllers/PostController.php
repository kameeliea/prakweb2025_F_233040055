<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // salah → menyebabkan N+1
        // $posts = Post::all();

        // benar → gunakan eager loading
        $posts = Post::with(['user', 'category'])->get();

        return view('posts.index', compact('posts'));
    }
}
