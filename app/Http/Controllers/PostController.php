<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts =[
            ['title'=> 'First Post'],
            ['title'=> 'Second Post'],
            ['title'=> 'Third Post'],
            ['title'=> 'Fourth Post'],
            ['title'=> 'Fiveth Post'],
          ];

      return view('blog', ['posts' => $posts]);
    }
}
