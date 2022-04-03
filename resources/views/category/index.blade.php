@extends('layouts.app')

@section('content')

@foreach ($categories as $category)


<div class="">
  <a href="/category/{{ $category->id }}">
    <h1 class="text-green-500 text-3xl">
      {{ $category->category_name }}
    </h1>
  </a>
  </div>

  @endforeach
@endsection