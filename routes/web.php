<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', [ HomeController::class, 'index']);

=======
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});
>>>>>>> c45eb2d42a368a9788516234da0499eae982e05c
