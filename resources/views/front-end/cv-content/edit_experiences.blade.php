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
                            <strong class="card-title">Experiences Edit</strong>
                        </div>
                        <div class="card-body"> 
                            <form class="needs-validation" method="POST" action="{{route('updateExperience')}}" novalidate>
                                @csrf
                                @foreach ($experiences as $experience)
                                    <div class="form-group mb-3"> 
                                        <label for="company_name_{{$experience->id}}">Company Name, Freelance work</label>
                                        <input type="text" name="experiences[{{$experience->id}}][company_name]" value="{{$experience->company_name}}" id="company_name_{{$experience->id}}" class="form-control" placeholder="Enter company name or Freelance work" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="position_{{$experience->id}}">Position</label>
                                        <input type="text" name="experiences[{{$experience->id}}][position]" value="{{$experience->position}}" id="position_{{$experience->id}}" class="form-control" placeholder="Enter.." required>
                                    </div>
                                    <div class="form-row">
                                      <div class="col-md-8 mb-3">
                                          <label for="startDate_{{$experience->id}}">Start Date</label>
                                          <!-- استخدام input من نوع date -->
                                          <input type="date" name="experiences[{{$experience->id}}][startDate]" value="{{$experience->startDate}}" class="form-control" id="startDate_{{$experience->id}}" aria-describedby="button-addon2" required>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                          <label for="endDate_{{$experience->id}}">End Date</label>
                                          <input type="date" name="experiences[{{$experience->id}}][endDate]" value="{{$experience->endDate}}" class="form-control" id="endDate_{{$experience->id}}" aria-describedby="button-addon2">
                                          <input type="checkbox" name="experiences[{{$experience->id}}][still_working]" value="1" {{ is_null($experience->endDate) ? 'checked' : '' }} onchange="toggleEndDate({{$experience->id}})"> Still working here
                                      </div>
                                  </div>
                                  
                                    <div class="form-group mb-3">
                                        <label for="description_{{$experience->id}}">Description</label>
                                        <input type="text" name="experiences[{{$experience->id}}][description]" value="{{$experience->description}}" id="description_{{$experience->id}}" class="form-control" placeholder="Enter.." required>
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

@section('js')
<script>
  function toggleEndDate(experienceId) {
      const stillWorkingCheckbox = document.querySelector(`[name="experiences[${experienceId}][still_working]"]`);
      const endDateInput = document.getElementById(`endDate_${experienceId}`);
      
      if (stillWorkingCheckbox.checked) {
          endDateInput.disabled = true;  // تعطيل حقل "End Date"
          endDateInput.value = '';       // إفراغ الحقل إذا تم تعطيله
      } else {
          endDateInput.disabled = false; // تمكين الحقل مرة أخرى
      }
  }

  // التأكد من تعطيل حقل "End Date" إذا كان "Still working here" محدد مسبقًا عند تحميل الصفحة
  document.querySelectorAll('input[type="checkbox"][name*="[still_working]"]').forEach(function(checkbox) {
      const experienceId = checkbox.name.match(/\[(\d+)\]/)[1];
      toggleEndDate(experienceId);
  });
</script>

@endsection