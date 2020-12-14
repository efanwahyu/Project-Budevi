<header class="site-navbar absolute transparent" role="banner">
    <div class="py-2">
      <div class="container">

      </div>
    </div>
    <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
      <div class="container position-relative">
        <div class="site-logo">
          <a href="index.html"><img src="{{ URL::asset ('frontend/images/liverpool.png')}}" height="150" alt=""></a>
        </div>

        <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

        <ul class="site-menu js-clone-nav d-none d-md-block">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/match') }}">Matches</a></li>
          <li><a href="{{ url('/team') }}">Team</a></li>
          <li><a href="{{ url('/news') }}">News</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
        </ul>
      </div>
    </nav>
  </header>
