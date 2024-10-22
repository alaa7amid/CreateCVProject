@extends('backend.master')

@section('content')
<div class="row align-items-center mb-2 m-3">
    <div class="col">
      <h2 class="h5 page-title">{{__("Welcome!")}}</h2>
    </div>
    {{-- <div class="col-auto">
      <form class="form-inline">
        <div class="form-group d-none d-lg-inline">
          <label for="reportrange" class="sr-only">Date Ranges</label>
          <div id="reportrange" class="px-2 py-2 text-muted">
            <span class="small"></span>
          </div>
        </div>
        <div class="form-group">
          <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
          <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
        </div>
      </form>
    </div> --}}
  </div>

  <div class="row my-4 m-5">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col">
              <small class="text-center mb-1" style="color: black">{{__("Number of site users")}}</small>
              <h3 class="card-title mb-0">{{$num_users}}</h3>
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
    

    <div class="col-md-12 col-lg-12">
        <div class="card shadow">
          <div class="card-header">
            <strong class="card-title">{{__("Users")}}</strong>
                  </div>
          <div class="card-body my-n2">
            <table class="table table-striped table-hover table-borderless">
              <thead>
                <tr>
                  <th style="color: rgb(0, 0, 0)">ID</th>
                  <th style="color: rgb(0, 0, 0)">{{__("Name")}}</th>
                  <th style="color: rgb(0, 0, 0)">{{__("email")}}</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                  <td>{{$user->id}}</td>
                  <th scope="col">{{$user->name}}</th>
                  <td>{{$user->email}}</td>
                </tr>  
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
@endsection

@section('js')
  <script>


  document.addEventListener('DOMContentLoaded', function() {
  var userLang = document.documentElement.lang || 'en';

  document.querySelectorAll('.col,.card-header,.card-title').forEach(function(row) {
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