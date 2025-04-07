<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            $posts = Post::orderBy("id", 'desc')->get();
            return view('home', compact('posts'));
    }
}
