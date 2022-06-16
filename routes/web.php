<?php

use Illuminate\Support\Facades\Route;

//forma 1
Route::view('/', 'welcome');
Route::view('/contact', 'contact');
Route::view('/blog', 'blog');
Route::view('/about', 'about');


/*
Route::get('/', function () {
    return view('welcome');
});*/
