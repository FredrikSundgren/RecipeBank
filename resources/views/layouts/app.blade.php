<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="w-full bg-black h-screen">

  <div class="w-4/5 m-auto">
  <h1 class="text-4xl text-green-500 font-bold border-b border-solid border-green-400 text-center mt-4">
   <a href="/posts">The Recipe Bank</a>
  </h1>
      <nav class="">
          <ul class="flex justify-center mt-4 text-xl">
              <a href="/category" class="text-green-500 mr-4">Categorys</a>
              <a href="/posts" class="text-green-500 ml-4">Posts</a>
          </ul>
      </nav>


  @yield('content')

</div>
</body>
</html>
