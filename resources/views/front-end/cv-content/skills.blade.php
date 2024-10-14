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

  
<div class="col-md-6 mb-4">
    <div class="card shadow">
        <div class="card-body"> 
            <form action="{{route('storeSkills')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="tags">Enter Skills:</label>
                    <input type="text" name="skills" id="tags" placeholder="enter more skills" name="tags" class="form-control" data-role="tagsinput" />
                  </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div> <!-- /.card-body -->
    </div> 
</div>

@endsection
