<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">

  <title>@yield('title')</title>
</head>
<body class="bg-[#E8F4FA]">
    @yield('body')
</body>
</html>
