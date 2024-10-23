<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<!-- head section -->

@include('front-end.layout.head')
  

<body>
  <div class="hero_area">
    <!-- header section strats -->

    @include('front-end.layout.header')
    
    <!-- end header section -->
    <!-- slider section -->

    @include('front-end.layout.slider')
      
    <!-- end slider section -->
  </div>


  <!-- experience section -->

  <section class="experience_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="{{ asset('front-end/images/experience-img.jpg') }}" alt="Experience Image">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
              {{__("What is an Applicant Tracking System (ATS)?")}}
              </h2>
            </div>
            <p>
              {{__("The Applicant Tracking System (ATS) is software used by companies to efficiently manage job applications. It helps filter and evaluate resumes based on specific criteria, such as keywords, experience, and skills required for the job.")}}
            </p>
            <p>
              {{__("The ATS scans resumes electronically and ranks them according to how well they match the job requirements. If a resume is poorly formatted or lacks the right keywords, it may be excluded before the employer even sees it. Therefore, job applicants need to ensure that their resumes are designed in a way that is ATS-friendly, increasing their chances of passing the initial screening and reaching the interview stage.")}}
            </p>
            <p><strong>{{__("SkyCV will create your resume based on ATS standards, ensuring it is compatible with Applicant Tracking Systems used by companies to filter applications and increase your chances of securing an interview.")}}</strong></p>
            {{-- <div class="btn-box">
              <a href="{{ url('/read-more') }}" class="btn-1">
                Read More
              </a>
              <a href="{{ url('/hire') }}" class="btn-2">
                Hire
              </a>
            </div> --}}
            <div class="btn-box">
              @auth
              <div class="btn-box">
                <a href="{{route('BaiscInfo')}}" class="btn-1">
                  {{__("Create Your CV")}}
                </a>
              </div>
              @else
              <div class="btn-box">
                <a href="{{route('login')}}" class="btn-1">
                  {{-- Create Your CV --}}
                {{__("Login to create cv")}}
                </a>
              </div>
              @endauth
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <!-- end experience section -->



  <!-- end category section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-9 mx-auto">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="detail-box">
        <h3 class="mb-5">
        {{__("?How to Boost Your Resume’s Chances in Applicant Tracking Systems")}}
        </h3>
        <ul style="list-style-position: inside;">
          <li>
              <strong>{{__("Choose Job Descriptions Carefully:")}}</strong> 
              {{__("Use keywords from job postings to boost your chances of passing through ATS. Our site helps you with this.")}}
          </li>
          <li>
              <strong>{{__("Simplicity is Key:")}}</strong> 
              {{__("Avoid using complex tables or graphics; simpler resumes are more easily accepted by tracking systems.")}}
          </li>
          <li>
              <strong>{{__("Add Specific and Accurate Information:")}}</strong> 
              {{__("Make sure every section of your resume reflects the skills and experiences that match the job.")}} 
              {{__("SkyCV ensures optimal organization of your details.")}}
          </li>
          <li>
              <strong>{{__("Check Your Details:")}}</strong> 
              {{__("Ensure there are no spelling or formatting errors. Our platform makes sure your resume is perfect and ready for submission.")}}
          </li>
      </ul>
      
          
        <div class="btn-box">
          @auth
          <div class="btn-box">
            <a href="{{route('BaiscInfo')}}" class="btn-1">
              {{__("Create Your CV")}}
            </a>
          </div>
          @else
          <div class="btn-box">
            <a href="{{route('login')}}" class="btn-1">
              {{-- Create Your CV --}}
            {{__("Login to create cv")}}
            </a>
          </div>
          @endauth
        </div>
      </div>
      
    </div>
  </section>

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-9 mx-auto">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="detail-box">
        <h3 class="mb-5">
          {{__("نصائح لإنشاء سيرة ذاتية تتوافق مع نظام تتبع المتقدمين (ATS)")}}
        </h3>
        <ul style="list-style-position: inside;" >
          <li class="mb-2">
            <strong>{{__("استخدم الكلمات المفتاحية بذكاء:")}}</strong> 
            {{__("قم بتحليل وصف الوظيفة وأدرج الكلمات المفتاحية ذات الصلة في سيرتك الذاتية. ركز على المهارات والمؤهلات والمصطلحات المذكورة بشكل متكرر.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("اختر تنسيقًا بسيطًا:")}}</strong> 
            {{__("تجنب استخدام تخطيطات معقدة أو رسومات أو جداول. استخدم خطوطًا قياسية وعناوين واضحة لضمان سهولة قراءة السيرة الذاتية من قبل نظام ATS.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("خصص سيرتك الذاتية لكل طلب:")}}</strong> 
            {{__("قم بتخصيص سيرتك الذاتية لكل وظيفة تتقدم لها. أظهر الخبرات والمهارات الأكثر صلة بالمتطلبات المحددة للوظيفة.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("ركز على الإنجازات:")}}</strong> 
            {{__("بدلاً من مجرد سرد الواجبات الوظيفية، قم بتسليط الضوء على إنجازاتك. استخدم مقاييس قابلة للقياس لتوضيح تأثيرك في الأدوار السابقة.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("استخدم رؤوس أقسام تقليدية:")}}</strong> 
            {{__("التزم بالرؤوس التقليدية مثل \"الخبرة\" و\"التعليم\" و\"المهارات\". هذا يساعد نظام ATS على تحديد وتصنيف المعلومات بدقة.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("تجنب الاختصارات غير الشائعة:")}}</strong> 
            {{__("استخدم المصطلحات الكاملة بدلاً من الاختصارات التي قد لا يتعرف عليها نظام ATS. على سبيل المثال، اكتب \"بكالوريوس آداب\" بدلاً من \"ب.أ\".")}}
          </li>
          <li class="mb-2">
            <strong>{{__("تحقق من الأخطاء الإملائية والنحوية:")}}</strong> 
            {{__("راجع سيرتك الذاتية بعناية. قد يرفض نظام ATS السير الذاتية التي تحتوي على أخطاء أو زلات، لأنها قد تشير إلى نقص في الانتباه للتفاصيل.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("اجعلها موجزة:")}}</strong> 
            {{__("حاول أن تكون سيرتك الذاتية في صفحة واحدة إذا كان لديك أقل من 10 سنوات من الخبرة. كن مختصرًا وضمّن فقط المعلومات ذات الصلة للحفاظ على التركيز.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("استخدم الأفعال القوية:")}}</strong> 
            {{__("ابدأ النقاط الرئيسية بأفعال قوية مثل \"طورت\"، \"أدارت\"، أو \"نفذت\" للتعبير عن مساهماتك بفعالية.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("احفظها بالتنسيق الصحيح:")}}</strong> 
            {{__("احفظ سيرتك الذاتية بصيغة PDF أو مستند Word، حيث إن هذه الصيغ مقبولة عادةً من قبل نظام ATS. تحقق من قائمة الوظيفة لمتطلبات نوع الملف المحددة.")}}
          </li>
        </ul>
        <div class="alert alert-info mt-4" role="alert">
          <strong>{{__("ملاحظة:")}}</strong> 
          {{__("النظام يدعم اللغة الإنجليزية فقط، لذا تأكد من إعداد سيرتك الذاتية باللغة الإنجليزية لتحقيق أفضل النتائج.")}}
        </div>
        
        <div class="btn-box">
          @auth
          <div class="btn-box">
            <a href="{{route('BaiscInfo')}}" class="btn-1">
              {{__("Create Your CV")}}
            </a>
          </div>
          @else
          <div class="btn-box">
            <a href="{{route('login')}}" class="btn-1">
              {{__("Login to create cv")}}
            </a>
          </div>
          @endauth
        </div>
      </div>
    </div>
  </section>
  
  
  <!-- end about section -->

  <!-- freelance section -->

  

  <!-- end client section -->



  <!-- info section -->

  

  <!-- end info section -->

<!-- footer section -->
  @include('front-end.layout.footer')

<!-- end footer section -->

<!-- Scripts -->
@include('front-end.layout.script')



</body>
</body>

</html>