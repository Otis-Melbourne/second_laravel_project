<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::resource('posts', PostController::class);
Route::get('categories', function(){
    $categories = Category::with('posts')->get();
    dd($categories->toArray());
} );