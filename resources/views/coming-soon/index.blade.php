
<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!--// NAME OF YOUR SITE //-->
    <title>My new amazing site</title>

    <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!--// STYLES OF THEME //-->
    <link rel="stylesheet" type="text/css" href="/coming-soon/css/style.css">

    <!--// FAVICON //-->
    <link rel="shortcut icon" href="/coming-soon/img/favicon.png">

    <!--[if lt IE 9]>
    <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
    </script>
    <![endif]-->

    <!--// SOME SCRIPTS //-->
    <script src="/coming-soon/js/plugins/placeholder.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>$.noConflict();</script>

    <script src="/coming-soon/js/plugins/jq.countdown.js"></script>
    <script src="/coming-soon/js/plugins/jq.easing.js"></script>

    <script src="/coming-soon/config.js"></script>
    <script src="/coming-soon/js/main.js"></script>
  </head>

  <body>

    @include('coming-soon.countdown')

    @include('coming-soon.follow')

    @include('coming-soon.about')

    @include('coming-soon.team')

    @include('coming-soon.feedback')

    @include('coming-soon.footer')

    <div id="background">
      <div class="layout"></div>
      <div class="loading"></div>
      <div class="photos"></div>
    </div>

    <!--// SPECIAL <DIV> FOR COUNTDOWN. DON'T REMOVE IT! //-->
    <div id="cd" style="display:none"></div>
  </body>
</html>