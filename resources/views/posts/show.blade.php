@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
  <div class="text-center">
    <h1 class="text-5xl uppercase bold text-green-500">
      {{ $post->title }}
    </h1>
  </div>



<div class="py-10 text-center">
    <span class="uppercase text-blue-500 font-bold text-sm italic">
      Description:{{ $post->description }}

    </span>

    </h2>
    <p class="text-lg text-green-500 py-6">
Ingredients: {{ $post->ingredients }}
    </p>
    <p class="text-lg text-green-500 py-6">
      Cooking Time: {{ $post->cooking_time }} min
          </p>

  @foreach ($post->categories as $category)
  {{ $category->id }}">
    <h1 class="text-green-500 text-3xl">
      Category: {{ $category->category_name }}</h1>
   <hr class="mt-4 mb-8">
   @endforeach



</div>

      </div>
    </div>
@endsection