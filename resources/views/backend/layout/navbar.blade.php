<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
  <div class="container-fluid d-flex justify-content-center align-items-center">
    <a class="navbar-brand mx-lg-1 mr-0" href="{{route('dashboard')}}">
      <span>SkyCV</span>
    </a>

    <button class="navbar-toggler mt-2 toggle-sidebar text-muted">
      <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>

    <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a href="#" id="dashboardDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="ml-lg-2">{{__("Dashboard")}}</span><span class="sr-only">(current)</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dashboardDropdown">
            <a class="nav-link pl-lg-2" href="./index.html"><span class="ml-1">Default</span></a>
            <a class="nav-link pl-lg-2" href="./dashboard-analytics.html"><span class="ml-1">Analytics</span></a>
            <a class="nav-link pl-lg-2" href="./dashboard-sales.html"><span class="ml-1">E-commerce</span></a>
            <a class="nav-link pl-lg-2" href="./dashboard-saas.html"><span class="ml-1">Saas Dashboard</span></a>
            <a class="nav-link pl-lg-2" href="./dashboard-system.html"><span class="ml-1">Systems</span></a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="ml-lg-2">{{__("Edit CV")}}</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
            <a class="nav-link pl-lg-2" href="{{route('editBasicInfo')}}"><span class="ml-1">{{__("Edit Basic Information")}}</span></a>
            <a class="nav-link pl-lg-2" href="{{route('editProfileInfo')}}"><span class="ml-1">{{__("Edit Profile Information")}}</span></a>
            <a class="nav-link pl-lg-2" href="{{route('editSkills')}}"><span class="ml-1">{{__("Edit Skills")}}</span></a>
            <a class="nav-link pl-lg-2" href="{{route('editEducation')}}"><span class="ml-1">{{__("Edit Education Details")}}</span></a>
            <a class="nav-link pl-lg-2" href="{{route('editLanguage')}}"><span class="ml-1">{{__("Edit Language")}}</span></a>
            {{-- <a class="nav-link pl-lg-2" href="{{route('editImage')}}"><span class="ml-1">Edit Image</span></a> --}}
            <a class="nav-link pl-lg-2" href="{{route('editExperience')}}"><span class="ml-1">{{__("Edit Experiences")}}</span></a>
            <a class="nav-link pl-lg-2" href="{{route('editProjects')}}"><span class="ml-1">{{__("Edit Projects")}}</span></a>
            {{-- <a class="nav-link pl-lg-2" href="./ui-progress.html"><span class="ml-1">Progress</span></a> --}}
          </div>
        </li>
        
      </ul>
    </div>

    <ul class="navbar-nav d-flex align-items-center">
      <li class="nav-item">
        <a class="nav-link text-muted my-2" href="./#" id="modeSwitcher" data-mode="light">
          <i class="fe fe-sun fe-16"></i>
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mt-2" style="font-weight: bold; color: #000;">
            {{ Auth::user()->name }}
          </span>
        </a>
        <ul class="dropdown-menu dropdown" aria-labelledby="navbarDropdownMenuLink">
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{__("Profile")}}</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="nav-link logout-btn">
                {{ __('Log Out') }}
              </button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<style>
  .navbar-nav {
    align-items: center;
  }

  .dropdown-menu .nav-link, .logout-btn {
    color: #000; /* توحيد لون النص */
    text-decoration: none;
    padding: 8px 20px;
    width: 100%;
    display: block;
    text-align: left;
    background: transparent;
  }

  .dropdown-menu .nav-link:hover, .logout-btn:hover {
    background-color: #f8f9fa; /* لون خلفية عند التمرير */
  }

  .dropdown-menu .logout-btn {
    border: none;
    cursor: pointer;
  }

  .dropdown-menu {
    padding: 10px 0;
  }
</style>
