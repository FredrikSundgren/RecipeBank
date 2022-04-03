@extends('layouts.app')
@foreach ($posts as $post)

{{ $post->titel }}

@endforeach
@section('content')
    <div class="m-auto w-4/5 py-24">
      <div class="text-center">
        <h1 class="text-5xl uppercase bold">
          FOODS
        </h1>
      </div>
<div class="pt-10">
<a href="cars/create"
class="border-b-2 pb-2 border-dotted italic text-gray-500">
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
 href="cars/{{ $car->id }}/edit"
 class="border-b-2 pb-2 border-dotted italic text-green-500">
Edit &rarr;
</a>

<form action="/cars/{{ $car->id }}" class="pt-3"
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
      Founded:{{ $car->founded }}

    </span>
    <h2 class="text-gray-700 text-5xl hover:text-gray-500">
<a href="/cars/{{ $car->id }}">
{{ $car->name }}
</a>
    </h2>
    <p class="text-lg text-gray-700 py-6">
{{ $car->description }}
    </p>
    <hr class="mt-4 mb-8">
</div>
@endforeach
      </div>
    </div>
@endsection
