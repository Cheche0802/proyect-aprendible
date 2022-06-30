
<x-layouts.app
title="Crear nuevo post"
meta-description="Este es un post nuevo">


<h1> Create New post</h1>

<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <label for="title">
        Title <br>
        <input type="text" name="title" id="title">
    </label><br>

    <label for="body">
        Body<br>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
    </label><br>
    <button type="submit">Enviar </button><br>
</form><br>


<a href="{{route('posts.index')}}">Regresar</a>


</x-layouts.app>
