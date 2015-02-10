<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Laravel Collective</title>
    <link rel="stylesheet" href="/css/app.css"/>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <header class="centered-navigation" role="banner">
      <div class="centered-navigation-wrapper">
        <a href="javascript:void(0)" class="mobile-logo">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="Logo image">
        </a>
        <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
        <nav role="navigation">
          <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
            <li class="nav-link"><a href="javascript:void(0)">Home</a></li>
            <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
            <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
            <li class="nav-link logo">
              <a href="javascript:void(0)" class="logo">
                <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="Logo image">
              </a>
            </li>
            <li class="nav-link"><a href="javascript:void(0)">Testimonials</a></li>
            <li class="nav-link more"><a href="javascript:void(0)">More</a>
              <ul class="submenu">
                <li><a href="javascript:void(0)">Submenu Item</a></li>
                <li><a href="javascript:void(0)">Another Item</a></li>
                <li class="more"><a href="javascript:void(0)">Item with submenu</a>
                  <ul class="submenu">
                    <li><a href="javascript:void(0)">Sub-submenu Item</a></li>
                    <li><a href="javascript:void(0)">Another Item</a></li>
                  </ul>
                </li>
                <li class="more"><a href="javascript:void(0)">Another submenu</a>
                  <ul class="submenu">
                    <li><a href="javascript:void(0)">Sub-submenu</a></li>
                    <li><a href="javascript:void(0)">An Item</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-link"><a href="javascript:void(0)">Sign up</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="hero">
      <div class="hero-inner">
        <a href="" class="hero-logo"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image"></a>
        <div class="hero-copy">
          <h1>Short description of Product</h1>
          <p>A few reasons why this product is worth using, who it's for and why they need it.</p>
        </div>
        <button>Learn More</button>
      </div>
    </div>

    <div class="row">
      <div class="span12">
        <h1>Who we are</h1>
        <div class="cards">
          <div class="card">
            <div class="card-image">
              <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">
            </div>
            <div class="card-header">
              First Card
            </div>
            <div class="card-copy">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-4.png" alt="">
            </div>
            <div class="card-header">
              Another Card
            </div>
            <div class="card-copy">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-3.png" alt="">
            </div>
            <div class="card-header">
              The Last Card
            </div>
            <div class="card-copy">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
          </div>
        </div>
      </div>
    </div>


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



    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
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
  </body>
</html>