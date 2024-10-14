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
                  <strong class="card-title">Edit Education Detailes</strong>
                </div>
                <div class="card-body">
                  
                    <form class="needs-validation" method="POST" action="{{route('updateEducation')}}">
                        @csrf
                    @foreach ($education as $edu)    
                        <div class="form-group mb-3">
                          <label for="address-wpalaceholder">University, Institute</label>
                          <input type="text" name="education[{{$edu->id}}][education_level]" value="{{$edu->education_level}}" id="address-wpalaceholder" class="form-control" placeholder="Enter.." required>
                        </div>
                        <div class="form-row">
                          <div class="col-md-8 mb-3">
                            <label for="exampleInputEmail2">Start Date</label>
                            <input type="text" name="education[{{$edu->id}}][startDate]" value="{{$edu->startDate}}" class="form-control drgpicker" id="date-input1" aria-describedby="button-addon2">
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="custom-phone">End Date</label>
                            <input type="text" name="education[{{$edu->id}}][endDate]" value="{{$edu->endDate}}" class="form-control drgpicker" id="date-input1" aria-describedby="button-addon2">
                          </div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="address-wpalaceholder">University Major</label>
                          <input type="text" name="education[{{$edu->id}}][department]" value="{{$edu->department}}" id="address-wpalaceholder" class="form-control" placeholder="Enter.." required>
                        </div>
                        <hr>
                    @endforeach   
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                  
                 
                
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->





@endsection