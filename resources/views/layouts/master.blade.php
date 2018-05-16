<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
<head>
  <!-- Site Title-->
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="keywords" content="intense web design multipurpose template">
  <meta name="date" content="Dec 26">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CRoboto+Slab:400,300,700">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/may.css">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Styles -->

  <!--[if lt IE 10]>
  <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <script src="js/html5shiv.min.js"></script>
  <![endif]-->
</head>
<body>
  <div id="myModal" class="modal fade" role="dialog" style="background: rgba(255, 255, 255, 0.9);">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>
          <h4 class="modal-title" style="text-align: center; color: black">AUDITIONS!!!</h4>
        </div>
        <div class="modal-body" style="padding-left: 20px;">
          <h4 style="color: black">Calabar Audition kicks off on the 19th of May, 2018</h4>
          <ul style="font-size: 18px; color: black">
            <li>Venue: Dannic Hotel</li>
            <li>Address: Ekorinim 2 Off Muritala Mohammed Way, Calabar, Nigeria</li>
            <li>Time: 9am</li>
          </ul>
          <h4 style="color: black">Enugu Audition kicks off on the 23rd of May, 2018</h4>
          <ul style="font-size: 18px; color: black">
            <li>Venue: Dannic Hotel</li>
            <li>Address: 3 Edem Close, New Haven, Enugu, Nigeria</li>
            <li>Time: 9am</li>
          </ul>
          <h4 style="color: black">Port Harcourt Audition holds on the 26th and 27th of May, 2018</h4>
          <ul style="font-size: 18px; color: black">
            <li>Venue: Dannic Hotel</li>
            <li>Address: Plot 33 Circular Road, Presidential Estate, GRA Phase 2, Port Harcourt, Nigeria</li>
            <li>Time: 10am on 26th &amp; 12noon on 27th</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <!-- Page-->
  <div class="page text-center">
    @include('addons.header.header')

    @yield('content')

    <!-- Modal-->
    <div id="myModal" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" class="close mdi mdi-window-close"></button>
          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe data-src="//www.youtube.com/embed/-AhmuMqZB0s?wmode=transparent" class="embed-responsive-item youtube-player"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('addons.footer.footer')
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.php?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
  </html>
