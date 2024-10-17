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

  <!-- category section -->

  {{-- <section class="category_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Category
        </h2>
      </div>
      <div class="category_container">
        <div class="box">
          <div class="img-box">
            <img src="images/c1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Design & Arts
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Web Development
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              SEO Markting
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Video Edting
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c5.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Logo Design
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c6.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Game Design
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section> --}}


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

  <!-- end about section -->

  <!-- freelance section -->

  {{-- <section class="freelance_section ">
    <div id="accordion">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-1">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Work Freelaner Has Done
                </h2>
              </div>
              <div class="tab_container">
                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="img-box">
                    <img src="images/f1.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      $250 Million
                    </h5>
                    <h3>
                      Paid to Freelancers
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="img-box">
                    <img src="images/f2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      2 Million
                    </h5>
                    <h3>
                      Paid Invoices
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <div class="img-box">
                    <img src="images/f3.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      700,000
                    </h5>
                    <h3>
                      Worldwide Freelancer
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <div class="img-box">
                    <img src="images/f4.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      98%
                    </h5>
                    <h3>
                      Customer <br>
                      Satisfaction Rate
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- end freelance section -->

  <!-- client section -->

  {{-- <section class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="heading_container">
            <h2>
              Testimonial
            </h2>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

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