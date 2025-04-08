<?php

namespace App\Http\Controllers;

use App\Http\Requests\storePostRequest;
use App\Http\Requests\UpdatePost;
use App\Models\Category;
use App\Models\Post;
use ComposerAutoloaderInit626b9e7ddd47fb7eff9aaa53cce0c9ad;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $posts = Post::with('category')->get();
        return view('home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $categories = Category::all();
        return view('create', compact('categories') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storePostRequest $request){

        $validated = $request->safe()->only(['name', 'description', 'category_id']);
        $post = new Post();
        $post->create($validated);
        return redirect('posts');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post){
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post){
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePost $request, string $id){
        $post = Post::findOrFail($id);
        $validated = $request->safe()->only(['name', 'description']);
        $post->update($validated);
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post){
        $post->delete();
        return back();
    }
}
