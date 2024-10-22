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
                  <strong class="card-title">{{__("Experiences Details،Volunteer campaigns")}}</strong>
                </div>
                <div class="card-body">
                  <form class="needs-validation" method="POST" action="{{route('experienceStore')}}" novalidate>
                    @csrf
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">{{__("Company Name , Freelance work")}} </label>
                      <input type="text" name="company_name" id="address-wpalaceholder" class="form-control"
                        placeholder="{{__("Enter company name or Freelance work")}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address-wpalaceholder">{{__("Position")}}</label>
                        <input type="text" name="position" id="address-wpalaceholder" class="form-control"
                           required>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="start-date">{{__("Start Date")}}</label>
                        <input type="date" name="startDate" class="form-control" id="start-date" required>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="end-date">{{__("End Date")}}</label>
                        <input type="date" name="endDate" class="form-control" id="end-date">
                    </div>
                    
                    <div class="col-md-4 mt-2">
                        <input type="checkbox" id="still-working" name="stillWorking" value="1" onchange="toggleEndDate()">
                        <label for="still-working">{{__("I am still working here")}}</label>
                    </div>
                    
                    </div> <!-- /.form-row -->
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">{{__("Description")}}</label>
                      <input type="text" name="description" id="address-wpalaceholder" class="form-control"
                         required>
                    </div>
                    <button class="btn btn-primary" type="submit">{{__("Save")}}</button>

                    {{-- @php
                        $experience = \App\Models\Experience::where('user_id',Auth::user()->id)->exists();
                    @endphp --}}
                    <a href="{{ route('projects') }}" class="btn btn-secondary ">{{__("Next")}}</a> <!-- زر "Next" -->

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
  function toggleEndDate() {
      const stillWorkingCheckbox = document.getElementById('still-working');
      const endDateInput = document.getElementById('end-date');

      // إذا تم اختيار "لا يزال يعمل هنا"، يتم تعطيل حقل نهاية التاريخ
      if (stillWorkingCheckbox.checked) {
          endDateInput.disabled = true;
          endDateInput.value = ''; // إفراغ الحقل إذا كان معطلاً
      } else {
          endDateInput.disabled = false;
      }
  }
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
var userLang = document.documentElement.lang || 'en';

document.querySelectorAll('.form-group').forEach(function(element) {
 if (userLang === 'ar') {
   element.style.direction = 'rtl'; // إذا كانت اللغة العربية، اجعل الاتجاه من اليمين لليسار
   element.style.textAlign = 'right';
 } else {
   element.style.direction = 'ltr'; // إذا كانت اللغة إنجليزية، اجعل الاتجاه من اليسار لليمين
   element.style.textAlign = 'left';
 }
});
});

document.addEventListener('DOMContentLoaded', function() {
var userLang = document.documentElement.lang || 'en';

document.querySelectorAll('.form-row, button,.card-header,.alert').forEach(function(row) {
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