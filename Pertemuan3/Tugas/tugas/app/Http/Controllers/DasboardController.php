<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category', 'user'])->paginate(10);
        return view('dashboard.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.posts.create', compact('categories'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('dashboard.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        // ganti gambar bila upload baru
        if ($request->file('image')) {
            if ($post->image) {
                Storage::delete($post->image);
            }
            $validated['image'] = $request->file('image')->store('post-images');
        }

        +$post->update($validated);

        return redirect('/dashboard/posts')->with('success', 'Post diupdate');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        $post->delete();

        return back()->with('success', 'Post berhasil dihapus');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('post-images');
        }

        $validated['user_id'] = \Illuminate\Support\Facades\Auth::id();

        Post::create($validated);
        return redirect('/dashboard/posts')->with('success', 'Post dibuat');
    }
}
