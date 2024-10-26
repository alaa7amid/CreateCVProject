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
          <li class="mb-2">
              <strong>{{__("Choose Job Descriptions Carefully:")}}</strong> 
              {{__("Use keywords from job postings to boost your chances of passing through ATS. Our site helps you with this.")}}
          </li>
          <li class="mb-2">
              <strong>{{__("Simplicity is Key:")}}</strong> 
              {{__("Avoid using complex tables or graphics; simpler resumes are more easily accepted by tracking systems.")}}
          </li>
          <li class="mb-2">
              <strong>{{__("Add Specific and Accurate Information:")}}</strong> 
              {{__("Make sure every section of your resume reflects the skills and experiences that match the job.")}} 
              {{__("SkyCV ensures optimal organization of your details.")}}
          </li>
          <li class="mb-2">
              <strong>{{__("Check Your Details:")}}</strong> 
              {{__("Ensure there are no spelling or formatting errors. Our platform makes sure your resume is perfect and ready for submission.")}}
          </li>
      </ul>
      
          
        <div class="detail-box">
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
      <br>
   

      <div class="alert alert-info mt-4" role="alert">
        <strong>{{__("Note:")}}</strong> 
        {{__("The system supports English only, so make sure to prepare your resume in English for the best results.")}}
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
          {{__("Tips for Creating an ATS-Compatible Resume")}}
        </h3>
        <ul style="list-style-position: inside;" >
          <li class="mb-2">
            <strong>{{__("Use Keywords Smartly:")}}</strong> 
            {{__("Analyze the job description and include relevant keywords in your resume. Focus on the skills, qualifications, and terms mentioned frequently.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("Choose a Simple Format:")}}</strong> 
            {{__("Avoid complex layouts, graphics, or tables. Use standard fonts and clear headings to ensure your resume is easily readable by ATS.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("Tailor Your Resume for Each Application:")}}</strong> 
            {{__("Customize your resume for each job you apply to. Highlight the experiences and skills most relevant to the specific job requirements.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("Focus on Achievements:")}}</strong> 
            {{__("Instead of just listing job duties, highlight your accomplishments. Use measurable metrics to show your impact in previous roles.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("Use Traditional Section Headings:")}}</strong> 
            {{__("Stick to traditional headings like 'Experience,' 'Education,' and 'Skills.' This helps ATS accurately identify and categorize the information.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("Avoid Uncommon Abbreviations:")}}</strong> 
            {{__("Use full terms instead of abbreviations that may not be recognized by ATS. For example, write 'Bachelor of Arts' instead of 'B.A.'")}}
          </li>
          <li class="mb-2">
            <strong>{{__("Check for Spelling and Grammar Errors:")}}</strong> 
            {{__("Review your resume carefully. ATS may reject resumes with errors, as they may indicate a lack of attention to detail.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("Use Strong Action Verbs:")}}</strong> 
            {{__("Start bullet points with strong action verbs like 'Developed,' 'Managed,' or 'Implemented' to effectively communicate your contributions.")}}
          </li>
          <li class="mb-2">
            <strong>{{__("Save It in the Right Format:")}}</strong> 
            {{__("Save your resume as a PDF, as this format is typically accepted by ATS. Check the job listing for specific file format requirements.")}}
          </li>
        </ul>
        
        
        
        <div class="detail-box">
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