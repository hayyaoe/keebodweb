<!doctype html>
<html>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9CZ4Z05K1K"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-9CZ4Z05K1K');
    </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <style>
    .nav-blur {
    backdrop-filter: blur(1px);
    -webkit-backdrop-filter: blur(10px);
    background-color: rgba(232, 244, 250, 0.9);
  }
  </style>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">

  <title>@yield('title')</title>
</head>
<body class="bg-[#E8F4FA]">
    @yield('body')

    <livewire:scripts />
</body>
</html>
