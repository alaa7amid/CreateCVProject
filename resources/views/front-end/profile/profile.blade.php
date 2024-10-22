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
                    <label for="inputPassword4">Old Password</label>
                    <input type="password" class="form-control" name="old_password" id="old_password">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword5">New Password</label>
                    <input type="password" class="form-control" name="new_password" id="new_password">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword6">Confirm New Password</label>
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