<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blog.home');
});


Route::get('/visi', function () {
    return view('blog.visi-misi');
});
