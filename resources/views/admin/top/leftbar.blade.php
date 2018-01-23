<div class="sidebar-left">
  <div class="user-menu-items">
    <div class="list-unstyled btn-group">
      <button class="media btn btn-link dropdown-toggle"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="message_userpic">
          <img class="d-flex" src="{{asset('img/mayowa.png')}}" alt="Generic user image">
        </span>
        <span class="media-body">
          <span class="mt-0 mb-1">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
          @if( $checkAdminRole == 4 )
          <small> Super Admin</small>
          @elseif($checkAdminRole < 4)
          <small> Admin</small>
          @endif
        </span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="">Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
  <br>
  <ul class="nav flex-column in" id="side-menu">
    <li class="title-nav">MENU</li>
    <li class="nav-item"><a  href="{{ route('minstrelDashboard') }}" class="nav-link">DashBoard</a></li>
    <li class="nav-item"> <a href="javascript:void(0)" class="nav-link menudropdown ">Subscribers<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="{{ route('addressinfo.index') }}">Address Information</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contactinfo.index') }}">Contact Information</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('guardianinfo.index') }}">Guardian Information</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('personalinfo.index') }}">Personal Information</a> </li>
      </ul>
    </li>
    <li class="nav-item"><a  href="{{ route('teller.index') }}" class="nav-link">Teller</a></li>
    <!-- <li class="nav-item"> <a href="javascript:void(0)" class="nav-link menudropdown ">Leagues<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="#">Add Leagues</a> </li>
        <li class="nav-item"><a class="nav-link" href="#">List League</a> </li>
      </ul>
    </li>
    <li class="nav-item"> <a href="javascript:void(0)" class="nav-link menudropdown ">Games<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="#">Add Games</a> </li>
        <li class="nav-item"><a class="nav-link" href="#">List Games</a> </li>
      </ul>
    </li>
    <li class="nav-item"> <a href="#" class="nav-link">Scores</a></li>
    <li class="nav-item"> <a href="javascript:void(0)" class="nav-link menudropdown ">Q &amp; A<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="#">Add Q &amp; A</a> </li>
        <li class="nav-item"><a class="nav-link" href="#">List Q &amp; A</a> </li>
      </ul>
    </li>
    <li class="nav-item"> <a href="javascript:void(0)" class="nav-link menudropdown ">Users<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="#">All Time Winners</a> </li>
        <li class="nav-item"><a class="nav-link" href="#">All Users</a> </li>
      </ul>
    </li> -->
    <li class="nav-item"><a  href="#" class="nav-link">Customer Care</a></li>
    @if($checkAdminRole == 4)
    <li class="title-nav">
      <hr>
    </li>
    <li class="title-nav">Super Admin</li>
    <li class="nav-item"><a  href="#" class="nav-link">Admin</a></li>
    <!-- <li class="nav-item"><a  href="#" class="nav-link">Product Cost</a></li> -->
    @endif
  </ul>
  <hr>

  <hr>

  <br>
</div>
