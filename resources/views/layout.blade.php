<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Laravel Collective</title>

    <link href="/css/app.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    @yield('styles')
  </head>
  <body>
    @include('partials.nav')

    @yield('content')

    <script src="/js/app.js"></script>
    @yield('scripts')
  </body>
</html>
