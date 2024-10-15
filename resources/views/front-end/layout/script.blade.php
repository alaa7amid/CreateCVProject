<script src="{{ asset('front-end/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('front-end/js/bootstrap.js') }}"></script>
<script src="{{ asset('front-end/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-switch-button/dist/bootstrap-switch-button.min.js"></script>

<script>
    $(function(){
      $('#switch-language').switchButton({
        onlabel: 'العربية',  // النص عند التفعيل
        offlabel: 'English', // النص عند التعطيل
        onstyle: 'success',  // لون الخلفية عند التفعيل
        offstyle: 'danger'   // لون الخلفية عند التعطيل
      });
  
      // حدث تغيير اللغة عند تبديل الزر
      $('#switch-language').change(function() {
        if ($(this).is(':checked')) {
          // تغيير اللغة إلى العربية
          window.location.href = '/language/ar';
        } else {
          // تغيير اللغة إلى الإنجليزية
          window.location.href = '/language/en';
        }
      });
    });
  </script>
  
  
  