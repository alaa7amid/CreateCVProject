@extends('backend.master')

@section('content')
<div class="row align-items-center mb-2 m-3">
    <div class="col">
      <h2 class="h5 page-title">{{__("Welcome!")}}</h2>
    </div>
    <button  class="btn btn-primary" type="button">
   <a  style="color: aliceblue" href="{{route('admin_page')}}">
    {{__("Add Admin")}}
    </a> 
  </button>
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
    

<div class="col-md-12 col-lg-12">
        <div class="card shadow">
          <div class="card-header">
            <strong class="card-title">{{__("Admins")}}</strong>
                  </div>
          <div class="card-body">
            <table class="table table-striped table-hover table-borderless">
              <thead>
                <tr>
                  <th style="color: rgb(0, 0, 0)">ID</th>
                  <th style="color: rgb(0, 0, 0)">{{__("Name")}}</th>
                  <th style="color: rgb(0, 0, 0)">{{__("email")}}</th>
                  <th style="color: rgb(0, 0, 0)">{{__("Action")}}</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">{{__("Action")}}</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                        <a href="{{route('edit_admin',$user->id)}}" class="dropdown-item" href="#">{{__("Edit")}}</a>
                        <form action="{{route('delete_admin',$user->id)}}" method="post">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="dropdown-item">{{__("Remove")}}</button>
                        </form>
                      </div>
                    </div>
                  </td>
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