
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{URL::asset('frontend/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{URL::asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{URL::asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::asset('frontend/css/style.css')}}">

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="images/logo.png" alt="Image"></a>
        </div>
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    @include('layouts.partials.header')



    @yield('container')


  </div>

  <script src="{{ URL::asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/jquery-ui.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/jquery.countdown.min.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/aos.js')}}"></script>

  <script src="{{ URL::asset('frontend/js/main.js')}}"></script>

  </body>
</html>
