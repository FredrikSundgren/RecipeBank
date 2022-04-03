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
  <div class="text-center">
  <a  href="/category"><h2 class="text-2xl text-green-500 text-center mt-3 hover:text-blue-500">Categories</h2></a>

  <a href="/posts/create"><h2 class="text-2xl text-green-500 text-center mt-3 hover:text-blue-500">Create Post</h2></a>
</div>
  @yield('content')
</div>
</body>
</html>