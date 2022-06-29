<?php

namespace App\Http\Controllers;

class PostControler
{
    public function methodprueba()
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
