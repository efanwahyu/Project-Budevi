<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ URL::asset('backend/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="{{url('/dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('dashboardnews.index')}}">
                  <i class="ni ni-email-83 text-primary"></i>
                  <span class="nav-link-text">News</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="{{route('dashboardhighlight.index')}}">
                  <i class="ni ni-email-83 text-primary"></i>
                  <span class="nav-link-text">Highlight</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('dashboardgames.index')}}">
                  <i class="ni ni-archive-2 text-primary"></i>
                  <span class="nav-link-text">Match</span>
                </a>
              </li>

              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="ni ni-archive-2 text-primary"></i> <span>Players</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('dashboardkiper.index')}}">Kiper</a></li>
                    <li><a class="dropdown-item" href="{{route('dashboardplayer.index')}}">Forward</a></li>    
                    <li><a class="dropdown-item" href="{{route('dashboarddefender.index')}}">Defender</a></li> 
                    <li><a class="dropdown-item" href="{{route('dashboardmidfilder.index')}}">Midfilder</a></li>           
                  </ul>
              </li>


          </ul>
        </div>
      </div>
    </div>
  </nav>
