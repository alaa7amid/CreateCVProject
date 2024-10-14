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
                  <strong class="card-title">Image upload</strong>
                </div> 
                <div class="card-body">
                  <form class="needs-validation" method="POST" action="{{route('storeImage')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 mb-4">
                        <div class="card shadow">
                          <div class="card-body">
                            <div class="form-group mb-3">
                              <div class="form-group mb-3">
                                <label for="example-fileinput">upload your image</label>
                                <input type="file" name="image" id="example-fileinput" class="form-control-file">
                              </div>
                            </div>
                          </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                      </div> <!-- /.col -->
                    <button class="btn btn-primary" type="submit">Save</button>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection