<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('categories', function(){
    $categories = Category::with('posts')->get();
    dd($categories->toArray());
} );


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::resource('posts', PostController::class);
    Route::get('/home', [HomeController::class, 'index']);
    
});
