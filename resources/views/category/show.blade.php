@extends('layouts.app')

@section('content')


<div class="">
<a href="/category/{{ $categories->id }}">
  <h1 class="text-green-500 text-3xl">
    {{ $categories->category_name }}
  </h1>
</a>
</div>


@foreach ($categories->posts as $post)
<div class="">
<a href="/posts/{{ $post->id }}">
  <h1 class="text-green-500 text-3xl">
    {{ $post->title }}
    {{ $post->ingredients }}

  </h1>
</a>
</div>
@endforeach
@endsection