
@extends('backend.master')

@section('content')

<div class="align-items-center h-100 d-flex w-50 mx-auto">
    <div class="mx-auto text-center">
      {{-- <h1 class="display-1 m-0 font-weight-bolder text-muted" style="font-size:80px;">404</h1> --}}
      <h1 class="mb-1 text-muted font-weight-bold">OOPS!</h1>
      <h4 class="mb-3 text-muted">{{__"You haven't created your CV, let's start now!")}}</h4>
      <a href="{{route('BaiscInfo')}}" class="btn btn-lg btn-primary px-5">{{__("Back to create your cv")}}</a>
    </div>
  </div>

  @endsection