<!-- Page Header-->
<header style="position:absolute; left:0; right:0;top:0" class="page-head">
  <!-- RD Navbar Transparent-->
  <div class="rd-navbar-wrap">
    <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="40" class="rd-navbar rd-navbar-transparent" data-lg-auto-height="true" data-auto-height="false" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true" data-md-focus-on-hover="false">
      <div class="rd-navbar-inner">
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel">
          <!-- RD Navbar Toggle-->
          <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
          <h4 class="panel-title veil-lg">{{ $cover }}</h4>
        </div>
        <div class="rd-navbar-menu-wrap clearfix">
          <!--Navbar Brand-->
          <div class="rd-navbar-brand"><a href="{{ route('minstrelHome') }}" class="reveal-inline-block">
            <div class="unit unit-xs-bottom unit-lg unit-lg-horizontal unit-spacing-xxs">
              <div class="unit-left">
                <div class="wrap"><img width='110' height='100' src='images/logo-170x172.png' alt=''/></div>
              </div>
              <!-- <div class="unit-body text-lg-left">
                <div class="rd-navbar-brand-title">The Minstrel</div>
                <div class="rd-navbar-brand-slogan text-italic">Project</div>
              </div> -->
            </div></a></div>
            <div class="rd-navbar-nav-wrap">
              <div class="rd-navbar-mobile-scroll">
                <div class="rd-navbar-mobile-header-wrap">
                  <!--Navbar Brand Mobile-->
                  <div class="rd-navbar-mobile-brand"><a href="{{ route('minstrelHome') }}"><img width='130' height='130' src='images/logo-170x172.png' alt=''/></a></div>
                </div>
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="@if(isset($home)) {{ $home }} @endif"><a href="{{ route('minstrelHome') }}">Home</a>
                  </li>
                  <li class="@if(isset($about)) {{ $about }} @endif"><a href="{{ route('minstrelAbout') }}">About</a>
                  </li>
                  <li class="@if(isset($hall)) {{ $hall }} @endif"><a href="{{ route('minstrelGallery') }}">Gallery</a>
                  </li>
                  <li class="@if(isset($video)) {{ $video }} @endif"><a href="{{ route('minstrelVideo') }}">Video</a>
                  </li>
                  <li class="@if(isset($donate)) {{ $donate }} @endif"><a href="#">Donate</a>
                  </li>
                  <li class="@if(isset($contact)) {{ $contact }} @endif"><a href="{{ route('minstrelContact') }}">Contacts</a>
                  </li>
                  @guest
                  <li class="@if(isset($login_active)) {{ $login_active }} @endif"><a href="{{ route('login') }}">Login</a>
                  </li>
                  <li class="@if(isset($register_active)) {{ $register_active }} @endif"><a href="{{ route('register') }}">Register</a>
                  </li>
                  @elseif($checkIfAdmin == 1)
                  <li><a href="#">{{ Auth::user()->first_name }}</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="{{ route('minstrelTeller') }}">Edit Teller No</a></li>
                      <li><a href="{{ route('minstrelDashboard') }}">Dashboard</a></li>
                      <li><a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Logout</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                    </ul>
                  </li>
                  @else
                  <li><a href="#">{{ Auth::user()->first_name }}</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="{{ route('minstrelTeller') }}">Edit Teller No</a></li>
                      <li><a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Logout</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                    </ul>
                  </li>
                  @endguest

                  <!-- <li class="veil-lg"><a href="shopping-cart.php">Shopping Cart (2)</a></li> -->
                </ul>
                <!--RD Navbar Mobile Search-->
                <div id="rd-navbar-search-mobile" class="rd-navbar-search-mobile">
                  <form action="search-results.php" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                    <div class="form-group">
                      <label for="rd-navbar-mobile-search-form-input" class="form-label">Search...</label>
                      <input id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                    </div>
                    <button type="submit" class="icon fa-search rd-navbar-search-button"></button>
                  </form>
                </div>
              </div>
            </div>
            <!--RD Navbar Search-->
            <div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
              <form action="search-results.php" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                <div class="form-group">
                  <label for="rd-navbar-search-form-input" class="form-label">Search</label>
                  <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                  <div id="rd-search-results-live" class="rd-search-results-live"></div>
                </div>
              </form>
            </div>
            <!--RD Navbar shop-->
            <!-- <div class="rd-navbar-cart"><span class="icon fa-shopping-cart"></span><a href="shopping-cart.php" class="inset-left-10">2</a></div>  -->
          </div>
        </div>
      </nav>
    </div>
  </header>
