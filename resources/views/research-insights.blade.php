@extends('main-layouts.header')

@section('title', 'Research Insights')

@section('content')



  <section class="inner-top-sec inner-popular-top-carousel-wraper research-insights  section-space-top section-space-bottom" data-aos="fade-up">

    <div class="container">
      <h1>Research and Insights</h1>

      <div class="inner-popular-top-carousel-section inner-searchinsight-carousel-section">

        <div class="swiper inner-searchinsight-carousel">
          <div class="swiper-wrapper" style="height: auto;">

            <!-- each-slider -->
            <div class="swiper-slide">

              <div class="inner-popular-top-carousel-img">
               <a href="#" class="read-our-story-block read-our-story-block-carousel">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/research-insights-img.jpg') }}" alt="" />
                  </span><!--block-img-->
      
                  <h6>Regulatory News</h6>
      
                  <p>Praesent egestas ut felis sollicitudin aliquam. Praesent tincidunt risus nunc</p>
      
                  <label>January 16, 2023</label>
      
                </a><!--block-->

              </div><!--inner-top-carousel-img-->

            </div>
            <!-- each-slider-ends -->

            <!-- each-slider -->
            <div class="swiper-slide">

              <div class="inner-popular-top-carousel-img">
               <a href="#" class="read-our-story-block read-our-story-block-carousel">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/research-insights-img.jpg')}}" alt="" />
                  </span><!--block-img-->
      
                  <h6>Regulatory News</h6>
      
                  <p>Praesent egestas ut felis sollicitudin aliquam. Praesent tincidunt risus nunc</p>
      
                  <label>January 16, 2023</label>
      
                </a><!--block-->

              </div><!--inner-top-carousel-img-->

            </div>
            <!-- each-slider-ends -->


          </div><!--swiper-wrapper-->

        </div><!--swiper-->

        <div class="inner-popular-top-carousel-arrows">

          <div class="row align-items-center">

            <div class="col-12">
              <div class="swiper-pagination"></div>
            </div><!--col-->

            <div class="col-12">

              <div class="swiper-button-prev"><img src="{{ asset('images/round-btn-long-arrow-left.svg') }}" alt="" /></div>

              <div class="swiper-button-next"><img src="{{ asset('images/round-btn-long-arrow-right.svg') }}" alt="" /></div>

            </div><!--col-->

          </div><!--row-->



        </div><!--inner-popular-top-carousel-arrows-->


      </div><!--inner-top-carousel-->

    </div><!--container-->

  </section><!--Research and Insights-wraper-->

  
  <!-- for-border-devider -->
  <div class="container border-container">
    <div class="border-devider"></div>
  </div>
  <!-- for-border-devider -->


 <!-- stories-tab-section-starts -->
 <section class="stories-tab-section section-space-top" data-aos="fade-up">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="scroll-x">
          <ul class="tab-common nav nav-pills mb-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Regulatory News</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Industry Insights</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-d"
                type="button" role="tab" aria-controls="pills-d" aria-selected="false">Trending Topics</button>
            </li>
          </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">

              <div class="col-lg-4 col-sm-6">
      
                <a href="#" class="read-our-story-block">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/research-img1.jpg') }}" alt="" />
                  </span><!--read-our-story-block-img-->
      
                  <h6>Regulatory News</h6>
      
                  <p>Praesent blandit egestas porta. Morbi egestas vel arcu at mattis</p>
      
                  <label>January 16, 2023</label>
      
                </a><!--read-our-story-block-->
      
              </div><!--col-lg-4 col-sm-6-->
      
              <div class="col-lg-4 col-sm-6">
      
                <a href="#" class="read-our-story-block">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/research-img2.jpg') }}" alt="" />
                  </span><!--read-our-story-block-img-->
      
                  <h6>Regulatory News</h6>
      
                  <p>Praesent egestas ut felis sollicitudin aliquam. Praesent tincidunt risus nunc</p>
      
                  <label>January 16, 2023</label>
      
                </a><!--read-our-story-block-->
      
              </div><!--col-lg-4 col-sm-6-->
      
      
              <div class="col-lg-4 col-sm-6">
      
                <a href="#" class="read-our-story-block">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/research-img3.jpg') }}" alt="" />
                  </span><!--read-our-story-block-img-->
      
                  <h6>Lifestyle</h6>
      
                  <p>Proin dui sem, hendrerit quis consequat in, semper nec erat vehicula </p>
      
                  <label>January 16, 2023</label>
      
                </a><!--read-our-story-block-->
      
              </div><!--col-lg-4 col-sm-6-->
      
            </div><!--row-->
            <div class="row">

              <div class="col-lg-4 col-sm-6">
      
                <a href="#" class="read-our-story-block">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/research-img4.jpg') }}" alt="" />
                  </span><!--read-our-story-block-img-->
      
                  <h6>Regulatory News</h6>
      
                  <p>Praesent blandit egestas porta. Morbi egestas vel arcu at mattis</p>
      
                  <label>January 16, 2023</label>
      
                </a><!--read-our-story-block-->
      
              </div><!--col-lg-4 col-sm-6-->
      
              <div class="col-lg-4 col-sm-6">
      
                <a href="#" class="read-our-story-block">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/research-img5.jpg') }}" alt="" />
                  </span><!--read-our-story-block-img-->
      
                  <h6>Technology</h6>
      
                  <p>Praesent egestas ut felis sollicitudin aliquam. Praesent tincidunt risus nunc</p>
      
                  <label>January 16, 2023</label>
      
                </a><!--read-our-story-block-->
      
              </div><!--col-lg-4 col-sm-6-->
      
      
              <div class="col-lg-4 col-sm-6">
      
                <a href="#" class="read-our-story-block">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/research-img6.jpg') }}" alt="" />
                  </span><!--read-our-story-block-img-->
      
                  <h6>Regulatory News</h6>
      
                  <p>Proin dui sem, hendrerit quis consequat in, semper nec erat vehicula </p>
      
                  <label>January 16, 2023</label>
      
                </a><!--read-our-story-block-->
      
              </div><!--col-lg-4 col-sm-6-->
      
            </div><!--row-->
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">

              <div class="col-lg-4 col-sm-6">
      
                <a href="#" class="read-our-story-block">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/read-our-story-block-img-1.png')}}" alt="" />
                  </span><!--read-our-story-block-img-->
      
                  <h6>Intelligence</h6>
      
                  <p>Praesent blandit egestas porta. Morbi egestas vel arcu at mattis</p>
      
                  <label>January 16, 2023</label>
      
                </a><!--read-our-story-block-->
      
              </div><!--col-lg-4 col-sm-6-->
      
              <div class="col-lg-4 col-sm-6">
      
                <a href="#" class="read-our-story-block">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/read-our-story-block-img-2.png') }}" alt="" />
                  </span><!--read-our-story-block-img-->
      
                  <h6>Technology</h6>
      
                  <p>Praesent egestas ut felis sollicitudin aliquam. Praesent tincidunt risus nunc</p>
      
                  <label>January 16, 2023</label>
      
                </a><!--read-our-story-block-->
      
              </div><!--col-lg-4 col-sm-6-->
      
      
              <div class="col-lg-4 col-sm-6">
      
                <a href="#" class="read-our-story-block">
      
                  <span class="read-our-story-block-img">
                    <img src="{{ asset('images/read-our-story-block-img-3.png') }}" alt="" />
                  </span><!--read-our-story-block-img-->
      
                  <h6>Lifestyle</h6>
      
                  <p>Proin dui sem, hendrerit quis consequat in, semper nec erat vehicula </p>
      
                  <label>January 16, 2023</label>
      
                </a><!--read-our-story-block-->
      
              </div><!--col-lg-4 col-sm-6-->
      
            </div><!--row-->
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            Industry Insights</div>
          <div class="tab-pane fade" id="pills-d" role="tabpanel" aria-labelledby="pills-contact-tab">Trending Topics</div>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- stories-tab-section ends -->

    <!-- for-border-devider -->
    <div class="container border-container">
      <div class="border-devider"></div>
    </div>
    <!-- for-border-devider -->


<!-- small section  starts  -->
<section class="small-section-split section-space-top section-space-bottom" data-aos="zoom-in">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-5">
        <img class="img-fluid" src="{{ asset('images/small-sec-img.jpg') }}"> 
      </div>
      <div class="col-md-6 px-5-lg">
       <h2>Committed to Delivering
        World-class Expertise</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea</p>
      </div>
    </div>
  </div>
</section>
<!-- small section  ends -->


  <section class="popular-search ">

    <!-- for-border-devider -->
    <div class="container border-container">
      <div class="border-devider"></div>
    </div>
    <!-- for-border-devider -->

    <div class="container popular-search-main  space-top space-bottom">

     @include('main-layouts.popular-searches')

    </div>

  </section>
  <!-- popular-serach-section-ends -->

@endsection

