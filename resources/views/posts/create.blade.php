@extends('layouts.app')

@section('content')

<div class="m-auto w-4/8 py-24">
  <div class="text-center">
    <h1 class="text-5xl uppercase bold">
      Create Recipe
    </h1>
  </div>
  </div>
  <div class="flex justify-center pt-20">
  <form action="/posts" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="block">

      {{-- <input
      type="file"
      class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
      name="image"> --}}


      <input
       type="text"
       class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
       name="title"
      placeholder="Title...">

      <input
      type="text"
      class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
      name="description"
     placeholder="Description...">

     <input
     type="text"
     class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
     name="ingredients"
    placeholder="Ingredients...">

      <input
      type="number"
      class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
      name="cookingTime"
     placeholder="Cooking Time...">


     {{-- <input
     type="text"
     class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
     name="category"
    placeholder="Category..."> --}}

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