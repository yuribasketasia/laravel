<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    #return view('index');
});

Route::get('/posts', function () {
    return view('posts.index');
});
