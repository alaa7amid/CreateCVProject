@extends('backend.master')

@section('content')

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="col-md-6 mb-4">
    <div class="card shadow">
        <div class="card-body"> 
            <form action="{{route('storeProfileInfo')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="example-textarea">Profile Information</label>
                    <textarea class="form-control" id="example-textarea" name="profile" rows="6" style="font-size: 1.25rem; height: 200px;"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div> <!-- /.card-body -->
    </div> 
</div>

@endsection
