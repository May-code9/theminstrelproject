<!DOCTYPE html>
<html lang="en">
@include('admin.top.head')
<body class="menuclose menuclose-right">
  @if(Route::currentRouteName() == "register")
  <figure class="background"> <img src="{{asset('img/login_bg.jpg')}}" alt="Adminux- sign in "> </figure>
  @endif
  <!-- Page Loader -->
  <div class="loader_wrapper inner align-items-center text-center">
    <div class="load7 load-wrapper">
      <div class="loading_img"></div>
      <div class="loader"> Loading... </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- Page Loader Ends -->

  <header class="navbar-fixed">
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded">
      <div class="sidebar-left"> <a class="navbar-brand imglogo" href="{{route('minstrelDashboard')}}"></a>
        <button class="btn btn-link icon-header mr-sm-2 pull-right menu-collapse" ><span class="fa fa-bars"></span></button>
      </div>
      <form class="form-inline mr-sm-2  pull-left search-header hidden-md-down">
        <input class="form-control " type="text" placeholder="Search" id="search_header">
        <button class="btn btn-link icon-header " type="submit"><span class="fa fa-search"></span></button>
      </form>
      <div class="d-flex mr-auto"> &nbsp;</div>
      <ul class="navbar-nav content-right">
        <li class="align-self-center hidden-md-down"> <a  href="{{ route('minstrelHome') }}" class="btn btn-sm btn-primary mr-2"><span class="fa fa-home "></span> Home</a> </li>
        <li class="v-devider"></li>
        <li class="nav-item active">
          <button class="btn btn-link icon-header "  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-envelope-o"></span> <span class="badge-number bg-success"></span></button>
          <div class="dropdown-menu message-container">
            <div class="list-unstyled">
              <a href="#" class="media">
                <span class="message_userpic"><img class="d-flex" src="{{asset('img/mayowa.png')}}" alt="Generic user image"></span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Dhananjay Chauhan</h6>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <button class="btn btn-link icon-header badgeCircle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-bell-o"></span><span class="badge-number bg-danger"></span></button>
          <div class="dropdown-menu message-container">
            <div class="list-unstyled">
              <div class="media"> <span class="alert-block bg-primary"><span class="fa fa-bullhorn"></span></span>
                <div class="media-body"><b>Max Smith</b> updated post of <b>Astha Smith</b>. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item hidden-xs-down">
          <button class="btn btn-link icon-header " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-th"></span> </button>
          <div class="dropdown-menu message-container box-links">
            <div class="list-unstyled">
              <a href="?#" class="media">
                <span class="quick-block ">
                  <span class="fa fa-bullhorn"></span>
                </span>
              </a>
              <a href="?#" class="media">
                <span class="quick-block ">
                  <span class="fa fa-bell-o"></span>
                </span>
              </a>
              <a href="?#" class="media">
                <span class="quick-block ">
                  <span class="fa fa-calendar"></span>
                </span>
              </a>
              <a href="?#" class="media">
                <span class="quick-block ">
                  <span class="fa fa-id-card"></span>
                </span>
              </a>
              <a href="?#" class="media">
                <span class="quick-block ">
                  <span class="fa fa-handshake-o"></span>
                </span>
              </a>
              <a href="?#" class="media">
                <span class="quick-block ">
                  <span class="fa fa-camera-retro"></span>
                </span>
              </a>
              <a href="?#" class="media">
                <span class="quick-block ">
                  <span class="fa fa-flask"></span>
                </span>
              </a>
              <a href="?#" class="media">
                <span class="quick-block ">
                  <span class="fa fa-plane"></span>
                </span>
              </a>
              <a href="?#" class="media">
                <span class="quick-block ">
                  <span class="fa fa-pie-chart"></span>
                </span>
              </a>
            </div>
          </div>
        </li>
        <li class="v-devider"></li>
        <li class="nav-item "> <a class="btn btn-link icon-header menu-collapse-right" href="#"><span class="fa fa-podcast"></span> </a> </li>
      </ul>
      <div class="sidebar-right pull-right " >
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item">
            <button class="btn-link btn userprofile"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="userpic">
                <img src="{{asset('img/mayowa.png')}}" alt="user pic">
              </span>
              <span class="text">{{ Auth::user()->first_name }}</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="customerprofile.php">Profile</a>
              <a class="dropdown-item" href="#">Analytics Report</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Setting</a>
            </div>
          </li>
          <li><a href="sign-in2.php" class="btn btn-link icon-header" ><span class="fa fa-sign-out"></span></a></li>
        </ul>
      </div>
    </nav>
  </header>
  @include('admin.top.leftbar')

  @yield('content')

  @include('admin.footer.footer')
  @include('admin.bottom.script')
</body>
</html>
