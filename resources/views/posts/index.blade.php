@extends('layouts.app')
@foreach ($posts as $post)
  {{ $post->title }}
@endforeach

@section('content')
<div class="m-auto w-4/5 py-24">
  <div class="text-center">
    <h1 class="text-5xl uppercase bold text-green-500">
      RECIPES
    </h1>
  </div>
<div class="pt-10">
<a href="posts/create"
class="border-b-2 pb-2 border-dotted border-green-500 italic text-green-500">
Add a new recipe &rarr;
</a>
</div>

  <div class="w-5/6 py-10">
@foreach ($posts as $post)
<div class="m-auto">
  <div class="float-right">
    <a href="posts/{{ $post->id }}/edit"></a>

    {{-- gör att vi kommer i på det id vi vill göra en edit på --}}
<a
 href="posts/{{ $post->id }}/edit"
 class="border-b-2 pb-2 border-dotted italic text-green-500">
Edit &rarr;
</a>

<form action="/posts/{{ $post->id }}" class="pt-3"
  method="POST">
@csrf

@method('delete')
<button
type="submit"
class="border-b-2 pb-2 border-dotted italic text-red-500">
Delete &rarr;
</button>
</form>
 </div>
   <span class="uppercase text-blue-500 font-bold text-sm italic">
     Description:{{ $post->description  }}

   </span>
   <h2 class="text-green-500 text-5xl hover:text-gray-500">
<a href="/posts/{{ $post->id }}">
{{ $post->title }}
</a>
   </h2>
   <p class="text-lg text-green-300 py-6">Ingredients:
{{ $post->ingredients }}
   </p>
   <p class="text-lg text-green-300 py-6">Cooking Time:
    {{ $post->cooking_time }} min

    @foreach ($post->categories as $category)

  <a href="/category/{{ $category->id }}">
    <h1 class="text-green-500 text-3xl">
      {{ $category->category_name }}</h1></a>
   <hr class="mt-4 mb-8">
   @endforeach
</div>

@endforeach
@endsection