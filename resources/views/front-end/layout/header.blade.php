<header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container mt-4">
      <!-- شعار الموقع -->
      <a class="navbar-brand" href="{{ url('/') }}">
        {{-- <img src="{{ asset('2.png') }}" alt="Logo" /> --}}
        <span>SkyCV</span>
      </a>

      <!-- زر القائمة للأجهزة الصغيرة -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- قائمة التنقل -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">{{__("Home")}} <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">{{__("About")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/work') }}">{{__("Work")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/category') }}">{{__("Category")}}</a>
          </li>

         <!-- قائمة اختيار اللغة -->
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ __("Language") }}
  </a>
  <div class="dropdown-menu" aria-labelledby="languageDropdown">
      <a class="dropdown-item" href="{{ url('/language/en') }}">English</a>
      <a class="dropdown-item" href="{{ url('/language/ar') }}">العربية</a>
  </div>
</li>

                        
        </ul>

      </div>

      <div>
        <div class="custom_menu-btn">
          <button>
            <span class="s-1"></span>
            <span class="s-1"></span>
            <span class="s-3"></span>
            <span class="s-3"></span>
          </button>
        </div>
      </div>
    </nav>
  </div>
</header>

