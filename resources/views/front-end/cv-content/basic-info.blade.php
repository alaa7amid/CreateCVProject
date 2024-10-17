@extends('backend.master')

@section('content')


@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 pb-5 ">
          <div class="row">
            <div class="col-md-8 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">{{__("Basic Information")}}</strong>
                </div>
                <div class="card-body"> 
                  <form class="needs-validation" method="POST" action="{{route('storeBaiscInfo')}}" novalidate>
                    @csrf
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">{{__("Full Name")}}</label>
                      <input type="text" name="name" id="address-wpalaceholder" class="form-control"
                        placeholder="{{__("Enter your Name")}}" required>
                    </div>
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">{{__("Job Title")}}</label>
                      <input type="text" name="jobTitle" id="address-wpalaceholder" class="form-control"
                        placeholder="{{__("Enter your Job Title")}}" required>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail2">{{__("Email address")}}</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail2"
                          aria-describedby="emailHelp1" placeholder="{{__("Enter your Email address")}}" required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="custom-phone">{{__("Phone Number")}}</label>
                        <input class="form-control" placeholder="{{__("Enter your Phone Number")}}" name="phoneNumber" id="custom-phone" maxlength="14" required>
                      </div>
                    </div> <!-- /.form-row -->
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail2">{{__("Github link")}}</label>
                        <input type="text" name="github" class="form-control" id="exampleInputEmail2"
                          aria-describedby="emailHelp1">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="custom-phone">{{__("Linkedin link")}}</label>
                        <input type="text" class="form-control" name="linkedin" id="custom-phone">
                      </div>
                    </div> 
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">{{__("Address")}}</label>
                      <input type="text" name="address" id="address-wpalaceholder" class="form-control"
                        placeholder="{{__("Enter your address")}}" required>
                    </div>
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">{{__("Country")}}</label>
                      <input type="text" name="country" id="address-wpalaceholder" class="form-control"
                        placeholder="{{__("Enter your country")}}" required>
                    </div>
                    <button class="btn btn-primary" type="submit">{{__("Save")}}</button>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->





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