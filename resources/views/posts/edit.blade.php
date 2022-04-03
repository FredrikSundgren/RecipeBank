@extends('layouts.app')

@section('content')
<div class="m-auto w-4/8 py-24">
<div class="text-center">
  <h1 class="text-5xl uppercase bold text-green-500">
Update recipe
  </h1>
</div>
</div>
<div class="flex justify-center pt-20">
<form action="/posts/{{ $post->id }}" method="POST">

  @csrf

  {{-- Eloquents update model PUT. Controllers/PostsController public function update() --}}
  @method('PUT')
  <div class="block">
    <input
     type="text"
     class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
     name="title"
    value="{{ $post->title }}"
    >

    <input
    type="text"
    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
    name="description"
   value="{{ $post->description }}"
   >

   <input
   type="text"
   class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
   name="ingredients"
  value="{{ $post->ingredients }}"
  >

  <input
  type="number"
  class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
  name="cooking_time"
 value="{{ $post->cooking_time }}"
 >

 <select name="categories[]"  multiple>
  @foreach ($categories as $category)
    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
  @endforeach
</select>

  <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
Submit
  </button>
  </div>
</form>
</div>
@endsection