@extends('backend.master')

@section('content')


@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@section('css')
<style>
    .bootstrap-tagsinput {
      width: 100%;
      min-height: 38px;
      padding: 0.5rem;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      background-color: #f8f9fa;
      display: flex;
      flex-wrap: wrap;
    }
  
    .bootstrap-tagsinput .tag {
      background-color: #007bff;
      color: white;
      padding: 0.3rem 0.5rem;
      border-radius: 0.2rem;
      margin-right: 0.2rem;
      margin-bottom: 0.2rem;
    }
  
    .bootstrap-tagsinput input {
      border: none;
      outline: none;
      background-color: transparent;
      margin-left: 0.2rem;
    }
  
    .bootstrap-tagsinput .tag [data-role="remove"] {
      margin-left: 0.5rem;
      cursor: pointer;
      color: white;
    }
</style> 
@endsection
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 pb-5 ">
          <div class="row">
            <div class="col-md-8 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">{{__("Languages")}}</strong>
                </div>
                <div class="card-body">
                  <form class="needs-validation" method="POSt" action="{{route('storeLanguage')}}" novalidate>
                    @csrf
                        <div class="form-group mb-3">
                            <label for="tags">{{__("Enter Language:")}}</label>
                            <input type="text" name="language" value="arabic(native)" id="tags" placeholder="{{__("add..")}}" name="tags" class="form-control" data-role="tagsinput" />
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

  document.querySelectorAll('.alert,.card-header').forEach(function(row) {
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