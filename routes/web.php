<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*$posts =[
  ['title'=> 'First Post'],
  ['title'=> 'Second Post'],
  ['title'=> 'Third Post'],
  ['title'=> 'Fourth Post'],
  ['title'=> 'Fiveth Post'],
];*/

//forma 2 rutas con nombre
Route::view('/', 'welcome')->name('/');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('About');
//forma uno de llamado
//Route::view('/blog', 'blog', ['posts' => $posts ])->name('Blog');

//Forma2  de llamado
/*Route::get('/blog', function(){
    $posts =[
        ['title'=> 'First Post'],
        ['title'=> 'Second Post'],
        ['title'=> 'Third Post'],
        ['title'=> 'Fourth Post'],
        ['title'=> 'Fiveth Post'],
      ];

      return view('blog', ['posts' => $posts]);
})->name('Blog');*/


//Forma 3
//Route::get('/blog', PostController::class)->name('Blog');

//Forma 4 Array

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/{post}',  [PostController::class, 'show'])->name('posts.show');



/*
Route::get('/', function () {
    return view('welcome');
});*/
