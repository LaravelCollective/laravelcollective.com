<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Laravel Collective</title>
    <link rel="stylesheet" href="/css/app.css"/>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
    @yield('styles')
  </head>
  <body>

    <header class="centered-navigation" role="banner">
      <div class="centered-navigation-wrapper">
        <a href="javascript:void(0)" class="mobile-logo">
        <img src="/img/logo.png" alt="Logo image">
        </a>
        <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
        @include('partials.nav')
      </div>
    </header>

    @yield('content')

    <footer role="contentinfo">
      <div class="footer-logo">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo image">
      </div>
      <ul>
        <li><a href="javascript:void(0)">About</a></li>
        <li><a href="javascript:void(0)">Contact</a></li>
        <li><a href="javascript:void(0)">Products</a></li>
      </ul>

      <div class="footer-secondary-links">
        <ul>
          <li><a href="javascript:void(0)">Terms and Conditions</a></li>
          <li><a href="javascript:void(0)">Privacy Policy</a></li>
        </ul>

        <ul class="footer-social">
          <li><a href="javascript:void(0)">
              <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png" alt="Facebook">
            </a></li>
          <li><a href="javascript:void(0)">
              <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png" alt="Twitter">
            </a></li>
          <li><a href="javascript:void(0)">
              <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/youtube-logo-circle.png" alt="YouTube">
            </a></li>
        </ul>
      </div>
    </footer>

    <script src="/js/app.js"></script>
    <script>
      $(document).ready(function() {
        var menuToggle = $('#js-centered-navigation-mobile-menu').unbind();
        $('#js-centered-navigation-menu').removeClass("show");

        menuToggle.on('click', function(e) {
          e.preventDefault();
          $('#js-centered-navigation-menu').slideToggle(function(){
            if($('#js-centered-navigation-menu').is(':hidden')) {
              $('#js-centered-navigation-menu').removeAttr('style');
            }
          });
        });
      });
    </script>
    @yield('scripts')
  </body>
</html>