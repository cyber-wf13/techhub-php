<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>{{$title ?? 'TechHub'}}</title>
</head>

<body>
  <x-header />
  <main class="main">
    {{ $slot }}

    <x-footer />
  </main>

  <script src="{{asset('js/main.bundle.js')}}"></script>
</body>

</html>
