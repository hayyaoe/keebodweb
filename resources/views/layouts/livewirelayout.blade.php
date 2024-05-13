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
  <script>
      function ItemsList(e) {
          let list = document.querySelector('#items-list');
          e.name === 'items' ? (e.name = "closeitems", list.classList.add('md:grid'), list.classList.remove('-md:hidden')) : (e.name = "items", list.classList.add('-md:hidden'), list.classList.remove('md:grid'));
      }
  </script>
  <title>{{ $title ?? config('app.name', 'KeeBod') }}</title>
</head>
<body class="w-screen h-screen bg-[#E8F4FA]">
    {{ $slot }}
</body>
</html>
