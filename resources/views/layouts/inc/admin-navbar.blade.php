<nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">


    <!-- Messages Dropdown Menu -->

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link"  href="{{ url('admin/user-notifications') }}">
        <i class="far fa-bell"></i>
        @php
        $user=Auth::User()->id;
        $counts=App\Models\Notification::where('user_id','0')->count();
      
        @endphp
        <sup><span class="badge badge-danger">{{ $counts }}</span></sup>
       
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>


    {{-- user details --}}
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <img src="{{ asset('uploads/user/'. Auth::user()->profile_picture ) }}" alt="" width="20px" height="20px" class="img-circle">
          {{ Auth::user()->fname }}  {{ Auth::user()->lname }}&nbsp;

          <i class="fa fa-angle-down"></i>
          
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <div class="dropdown-divider"></div>
        <a href="{{ url('admin/my-profile') }}" class="dropdown-item text-secondary">
          <i class="fas fa-user mr-2"></i> My Profile
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-secondary" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        <i class="fas fa-power-off mr-2"></i>  {{ __('Logout') }}
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
         </form>
     </a>
   
      </div>
    </li>      
   
  </ul>

  
</nav>