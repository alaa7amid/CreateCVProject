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
                  <strong class="card-title">{{__("Certificates and Courses")}}</strong>
                </div>
                <div class="card-body">
                    <form class="needs-validation" method="POST" action="{{route('CertificatesUpdate')}}" novalidate>
                        @csrf
                        @foreach ($certificates as $certificate)
                            <div class="form-group mb-3">
                        <label for="address-wpalaceholder">{{__("Certificates,Courses Name")}}</label>
                        <input type="text" name="certificates[{{$certificate->id}}][certificates_name]" value="{{$certificate->certificates_name}}" id="address-wpalaceholder" class="form-control"
                            required>
                        </div>
                        <div class="form-group mb-3">
                        <label for="address-wpalaceholder">{{__("Description")}}</label>
                        <textarea type="text" name="certificates[{{$certificate->id}}][description]"  id="address-wpalaceholder" class="form-control"
                            required>{{$certificate->description}}"</textarea>
                            <hr>
                        </div>
                        @endforeach
                        <button class="btn btn-primary" type="submit">{{__("Update")}}</button>
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