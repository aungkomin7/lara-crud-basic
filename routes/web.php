<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostController2;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::resource("posts",PostController2::class);
