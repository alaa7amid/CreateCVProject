@extends('backend.master')

@section('content')

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="col-md-6 mb-4">
    <div class="card shadow">
        <div class="card-body"> 
            <form action="{{route('storeProfileInfo')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="example-textarea">{{__("Profile Information")}}</label>
                    <textarea class="form-control" id="example-textarea" name="profile" rows="6" style="font-size: 1.25rem; height: 200px;"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">{{__("Save")}}</button>
            </form>
        </div> <!-- /.card-body -->
    </div> 
</div>

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

  document.querySelectorAll('.card-header,.alert').forEach(function(row) {
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
