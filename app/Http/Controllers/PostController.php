<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePost;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\storePostRequest;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth as SupportFacadesAuth;
use ComposerAutoloaderInit626b9e7ddd47fb7eff9aaa53cce0c9ad;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        dd(Post::pluck("name"));
        
        if(auth()->user()->name == 'admin'){
            $posts = Post::with('category')->get();
        }else{
            $posts = Post::with('category')
                ->where('user_id', auth()->user()->id)->get();
        }
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

        $validated = $request->safe()->only(['name', 'description', 'category_id', 'user_id']);
        $post = new Post();
        $post->create($validated);
        return redirect('posts');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post){
        Gate::authorize('view', $post);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post){
        Gate::authorize('view', $post);
        $categories = Category::all();
        return view('edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePost $request, string $id){
        $post = Post::findOrFail($id);
        $validated = $request->validated();
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
