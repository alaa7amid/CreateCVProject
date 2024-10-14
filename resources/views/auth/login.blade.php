{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
  
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('back-end/favicon.ico') }}">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('back-end/css/simplebar.css') }}">
    
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
    
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('back-end/css/feather.css') }}">
 <!-- Date Range Picker CSS -->
 <link rel="stylesheet" href="{{ asset('back-end/css/daterangepicker.css') }}">
    
 <!-- App CSS -->
 <link rel="stylesheet" href="{{ asset('back-end/css/app-light.css') }}" id="lightTheme">
 <link rel="stylesheet" href="{{ asset('back-end/css/app-dark.css') }}" id="darkTheme" disabled>
  </head>
  <body class="light ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form method="POST" action="{{ route('login') }}" class="col-lg-6 col-md-8 col-10 mx-auto">
          @csrf
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
            <h2 class="my-3">Sign In</h2>
          </div> 
          <div class="form-row">
            {{-- <div class="form-group col-md-12">
              <label for="firstname">Name</label>
              <input type="text" id="firstname" class="form-control" name="name" :value="old('name')"  >
            </div> --}}
            {{-- <div class="form-group col-md-6">
              <label for="lastname">Lastname</label>
              <input type="text" id="lastname" class="form-control">
            </div> --}}
          </div>
          <div class="form-group">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" :value="old('email')" >
          </div>
         
          <hr class="my-4">
          <div class="row mb-12">
            <div class="col-md-12">
              <div class="form-group">
                <label for="inputPassword5">Password</label>
                <input type="password" class="form-control" id="inputPassword5" name="password">
              </div>
            </div>
          </div>
          <div class="my-4">
            <p class="mt-5 mb-3 text-muted text-center">You do not have an account <strong><a href="{{route('register')}}">Register</a></strong></p>
            
          </div>
          
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted text-center">© AZAL TECH</p>
          
        </form>
      </div>
    </div>
    <script src="{{ asset('back-end/js/popper.min.js') }}"></script>
    <script src="{{ asset('back-end/js/jquery.min.js') }}"></script>
    <script src="{{ asset('back-end/js/moment.min.js') }}"></script>
    <script src="{{ asset('back-end/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('back-end/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('back-end/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('back-end/js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('back-end/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('back-end/js/config.js') }}"></script>
    <script src="{{ asset('back-end/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
