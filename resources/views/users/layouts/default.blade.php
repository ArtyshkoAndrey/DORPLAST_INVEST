<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link  rel="stylesheet" href="{{ asset('css/iconly.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <title>{{ config('app.name') }} - @yield('title', 'Главная страницу')</title>
</head>
<body>
  @include('users.layouts.menu_default')

  @yield('body')

  @include('users.layouts.footer_default')

{{--  Scripts  --}}

  <script  src="{{ asset('js/manifest.js') }}"></script>
  <script src="{{ asset('js/vendor.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

  @yield('js')
</body>
</html>
