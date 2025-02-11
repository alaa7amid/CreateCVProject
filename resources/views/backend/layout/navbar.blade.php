@php
use App\Models\BasicInfo as BasicInfoModel;
use App\Models\Language as LanguageModel;
use App\Models\Skills as SkillsModel;
use App\Models\ProfileInfo as ProfileInfoModel;

$basicInfo = BasicInfoModel::where('user_id', Auth::user()->id)->exists();
$language = LanguageModel::where('user_id', Auth::user()->id)->exists();
$skills = SkillsModel::where('user_id', Auth::user()->id)->exists();
$profileInfo = ProfileInfoModel::where('user_id', Auth::user()->id)->exists();


$hasData = $basicInfo && $language && $skills && $profileInfo;
@endphp


<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
  <div class="container-fluid d-flex justify-content-center align-items-center">
    @if ($hasData)
      <a class="navbar-brand mx-lg-1 mr-0" href="{{ route('createCv') }}">
        <span>SkyCV</span>
      </a>
    @endif

    <button class="navbar-toggler mt-2 toggle-sidebar text-muted">
      <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>

    <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
      <ul class="navbar-nav">
        @if (Auth::check() && Auth::user()->role === 1)
           <li class="nav-item dropdown">
          <a href="#" id="dashboardDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="ml-lg-2">{{__("Dashboard")}}</span><span class="sr-only">(current)</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dashboardDropdown">
            <a class="nav-link pl-lg-2" href="{{route('dashboard.admin')}}"><span class="ml-1">{{__("Dashboard")}}</span></a>
            <a class="nav-link pl-lg-2" href="{{route('dashboard.admins')}}"><span class="ml-1">{{__("Admins")}}</span></a>

          </div>
        </li> 
        @endif
        

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
            <a class="nav-link pl-lg-2" href="{{route('CertificatesEdit')}}"><span class="ml-1">{{__("Edit Certificate")}}</span></a>

            {{-- <a class="nav-link pl-lg-2" href="./ui-progress.html"><span class="ml-1">Progress</span></a> --}}
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="ml-lg-2">{{__("Add To CV")}}</span>
          </a>
          @php
            use App\Models\BasicInfo;
            use App\Models\Language;
            use App\Models\Skills;
            use App\Models\ProfileInfo;

            $basicInfo = BasicInfo::where('user_id',Auth::user()->id)->first();
            $language = Language::where('user_id',Auth::user()->id)->first();
            $skills = Skills::where('user_id',Auth::user()->id)->first();
            $profileInfo = ProfileInfo::where('user_id',Auth::user()->id)->first();

          @endphp

          <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">

            <a class="nav-link pl-lg-2 {{ (!$basicInfo || !$language || !$skills || !$profileInfo) ? 'disabled' : '' }}" href="{{route('education')}}"><span class="ml-1">{{__("Add Education Details")}}</span></a>

            <a class="nav-link pl-lg-2 {{(!$basicInfo || !$language || !$skills || !$profileInfo) ? 'disabled' : ''}}" href="{{route('experience')}}"><span class="ml-1">{{__("Add Experiences")}}</span></a>
            <a class="nav-link pl-lg-2 {{(!$basicInfo || !$language || !$skills || !$profileInfo) ? 'disabled' : ''}}" href="{{route('projects')}}"><span class="ml-1">{{__("Add Projects")}}</span></a>
            <a class="nav-link pl-lg-2 {{(!$basicInfo || !$language || !$skills || !$profileInfo) ? 'disabled' : ''}}" href="{{route('Certificates')}}"><span class="ml-1">{{__("Add certificates, courses")}}</span></a>

            {{-- <a class="nav-link pl-lg-2" href="./ui-progress.html"><span class="ml-1">Progress</span></a> --}}
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="ml-lg-2">{{__("Remove From CV")}}</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
            <a class="nav-link pl-lg-2 {{ (!$basicInfo || !$language || !$skills || !$profileInfo) ? 'disabled' : '' }}" href="{{route('deleteEducations')}}"><span class="ml-1">{{__("Remove Education Details")}}</span></a>
            <a class="nav-link pl-lg-2 {{ (!$basicInfo || !$language || !$skills || !$profileInfo) ? 'disabled' : '' }}" href="{{route('deleteExperiences')}}"><span class="ml-1">{{__("Remove Experiences")}}</span></a>
            <a class="nav-link pl-lg-2 {{ (!$basicInfo || !$language || !$skills || !$profileInfo) ? 'disabled' : '' }}" href="{{route('deleteProjects')}}"><span class="ml-1">{{__("Remove Projects")}}</span></a>
            <a class="nav-link pl-lg-2 {{ (!$basicInfo || !$language || !$skills || !$profileInfo) ? 'disabled' : '' }}" href="{{route('deleteCertification')}}"><span class="ml-1">{{__("Remove Certificates")}}</span></a>
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
            <a class="nav-link" href="{{route('profile_page')}}">{{__("Profile")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link logout-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Log Out') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
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

  .dropdown-menu .nav-link {
    color: #000; /* توحيد لون النص */
    text-decoration: none;
    padding: 8px 20px;
    width: 100%;
    display: block;
    text-align: left;
    background: transparent;
    font-weight: normal; /* تأكيد أن الخط عادي لكل العناصر */
  }

  .dropdown-menu .nav-link:hover {
    background-color: #f8f9fa; /* لون خلفية عند التمرير */
  }

  .dropdown-menu {
    padding: 10px 0;
  }

  .dropdown-menu li {
    list-style: none;
  }
</style>


