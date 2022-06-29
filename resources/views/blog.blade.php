
<x-layouts.app
    title="Home"
    meta-description="home web">

    <h1>Blog</h1>

    @foreach ($posts as $post)
      <h3>   {{ $post['title']  }} </h3>
    @endforeach

</x-layouts.app>
