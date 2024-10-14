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
                  <strong class="card-title">Project Detailes</strong>
                </div>
                <div class="card-body">
                  <form class="needs-validation" method="POST" action="{{route('projectsStore')}}" novalidate>
                    @csrf
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">Project Name</label>
                      <input type="text" name="project_name" id="address-wpalaceholder" class="form-control"
                        placeholder="Enter Project Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address-wpalaceholder">Technologies used</label>
                        <input type="text" name="Technologies" id="address-wpalaceholder" class="form-control"
                          placeholder="Enter Technologies used" required>
                    </div>
                   
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">Description</label>
                      <textarea type="text" name="description" id="address-wpalaceholder" class="form-control"
                        placeholder="project description" required></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    @php
                    $projects = \App\Models\project::where('user_id',Auth::user()->id)->exists();
                @endphp
                <a href="{{ route('createCv') }}" class="btn btn-secondary {{$projects ? '': 'disabled'}}">Next</a> <!-- زر "Next" -->
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->




 
@endsection