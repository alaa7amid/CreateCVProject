@extends('backend.master')

@section('content')

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">

            <form method="POST" action="{{route('update_profile',$user->id)}}">
                @csrf
              <hr class="my-4">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="lastname">{{__("Name")}}</label>
                  <input type="text" id="lastname" class="form-control" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail4">{{__("Email")}}</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$user->email}}">
              </div>
              </div>
              <button type="submit" class="btn btn-primary">{{__("Update")}}</button>
            </form>


            <form action="{{route('update_password')}}" method="POST">
              @csrf
              <hr class="my-4">
              <div class="row mb-4">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inputPassword4">{{__("Old Password")}}</label>
                    <input type="password" class="form-control" name="old_password" id="old_password">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword5">{{__("New Password")}}</label>
                    <input type="password" class="form-control" name="new_password" id="new_password">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword6">{{__("Confirm New Password")}}</label>
                    <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" required>
                </div>
                  <button type="submit" class="btn btn-primary">{{__("Update")}}</button>
              </div>
            </form>
          </div> <!-- /.card-body -->
        </div> <!-- /.col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    
  </main>
@endsection

@section('js')
  <script>
       document.addEventListener('DOMContentLoaded', function() {
    var userLang = document.documentElement.lang || 'en';

    document.querySelectorAll('.form-group').forEach(function(element) {
      if (userLang === 'ar') {
        element.style.direction = 'rtl'; // إذا كانت اللغة العربية، اجعل الاتجاه من اليمين لليسار
        element.style.textAlign = 'right';
      } else {
        element.style.direction = 'ltr'; // إذا كانت اللغة إنجليزية، اجعل الاتجاه من اليسار لليمين
        element.style.textAlign = 'left';
      }
    });
});

  document.addEventListener('DOMContentLoaded', function() {
  var userLang = document.documentElement.lang || 'en';

  document.querySelectorAll('.form-row, button,.card-header,.alert').forEach(function(row) {
    if (userLang === 'ar') {
      row.style.direction = 'rtl'; // إذا كانت اللغة عربية، اجعل الاتجاه من اليمين إلى اليسار
      row.style.textAlign = 'right'; // محاذاة النص لليمين
    } else {
      row.style.direction = 'ltr'; // إذا كانت اللغة إنجليزية، اجعل الاتجاه من اليسار إلى اليمين
      row.style.textAlign = 'left'; // محاذاة النص لليسار
    }
  });
});

 </script>
@endsection