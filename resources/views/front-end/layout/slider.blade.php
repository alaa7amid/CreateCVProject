<section class="slider_section ">
    <div class="carousel_btn-container">
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5 offset-md-1">
                <div class="detail-box">
                  <h1>
                    You Can <br>
                    Hire Freelancer <br>
                    Here
                  </h1>
                  <p>
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page
                  </p>
                  @auth
                  <div class="btn-box">
                    <a href="{{route('BaiscInfo')}}" class="btn-1">
                      Create Your CV
                    </a>
                  </div>
                  @else
                  <div class="btn-box">
                    <a href="{{route('login')}}" class="btn-1">
                      {{-- Create Your CV --}}
                      Login to create cv
                    </a>
                  </div>
                  @endauth
                </div>
              </div>
              <div class="offset-md-1 col-md-4 img-container">
                <div class="img-box">
                  <img src="{{ asset('front-end/images/slider-img.png') }}" alt="Slider Image">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5 offset-md-1">
                <div class="detail-box">
                  <h1>
                    You Can <br>
                    Hire Freelancer <br>
                    Here
                  </h1>
                  <p>
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page
                  </p>
                  @auth
                  <div class="btn-box">
                    <a href="{{route('BaiscInfo')}}" class="btn-1">
                      Create Your CV
                    </a>
                  </div>
                  @else
                  <div class="btn-box">
                    <a href="{{route('login')}}" class="btn-1">
                      {{-- Create Your CV --}}
                      Login to create cv
                    </a>
                  </div>
                  @endauth
                </div>
              </div>
              <div class="offset-md-1 col-md-4 img-container">
                <div class="img-box">
                  <img src="{{ asset('front-end/images/slider-img.png') }}" alt="Slider Image">
                </div>
              </div>
            </div>
          </div>
        </div>
     
      </div>
    </div>
</section>