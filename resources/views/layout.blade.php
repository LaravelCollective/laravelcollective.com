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
    <script>
      !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
        arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
        d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
          insertBefore(d,q)}(window,document,'script','_gs');

      _gs('GSN-057185-B');
    </script>
  </body>
</html>
