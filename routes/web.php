<?php

use Illuminate\Support\Facades\Route;

//forma 2 rutas con nombre
Route::view('/', 'welcome')->name('/');
Route::view('/contact', 'contact')->name('contact');
Route::view('/blog', 'blog')->name('Blog');
Route::view('/about', 'about')->name('About');


/*
Route::get('/', function () {
    return view('welcome');
});*/
