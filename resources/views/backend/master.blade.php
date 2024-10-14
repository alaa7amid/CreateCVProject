<!doctype html>
{{-- <html lang="ar" dir="rtl"> --}}
  <html lang="en" dir="ltr">

    <!-- head section -->

@include('backend.layout.head')
  
@yield('css')
<body class="horizontal  light  ">
  <div class="wrapper">

    <!-- head section -->
    @include('backend.layout.navbar')
    
    <!-- head section -->
    {{-- @include('backend.layout.sidebar') --}}

        <!-- main -->
    <main role="main" class="main-content">
      @yield('content')
    </main> 
  </div> <!-- .wrapper -->

  <!-- .script -->
  @include('backend.layout.script')


    
@yield('js')
</body>

</html>