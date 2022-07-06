
<x-layouts.app
title="Crear nuevo post"
meta-description="Este es un post nuevo">



<h1> Create New post</h1>

@dump($errors->all())
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <label for="title">
        Title <br>
        <input type="text" name="title" id="title" required value="{{old('title')}}">
        <br>
        @error('title')
            <small style="color: red">{{$message}}</small>
            <br>
        @enderror
    </label>

    <label for="body">
        Body<br>
        <textarea name="body" id="body" cols="30" rows="10" required >{{old('body')}}</textarea>
    </label><br>
    <br>
    @error('body')
    <small style="color: red">{{$message}}</small>
    <br>
    @enderror

    <button type="submit">Enviar </button><br>
</form><br>


<a href="{{route('posts.index')}}">Regresar</a>l


</x-layouts.app>
