@extends('main-layouts.header')

<!-- for country select -->
<link href="{{ asset('css/style-e.css') }}" rel="stylesheet">

@section('content')



<!-- Banner Section Starts here -->
<div class="career-banner-section container-fluid section-space-top section-space-bottom" data-aos="zoom-in">
    <h1>{{ $careerdetail->title }}</h1>
    <img class="banner-img only-desk" src="{{ asset('./admin/uploads/career/'.$careerdetail['bg_image'])}}" alt="">
    <img class="banner-img only-mob" src="{{ asset('./admin/uploads/career/'.$careerdetail['bg_image_mobile']) }}" alt="">
</div>

<!-- Banner Section Starts here -->
<div class="container">


    <!-- career-content-section -->
    <div class="row h-banner-content-row career-baner-content-row">
        <div class="col-sm-6 h-banner-cont-left" data-aos="zoom-in">
            <h3>{{ $careerdetail->sub_title }}</h3>
        </div>
        <div class="col-sm-6 h-banner-cont-right" data-aos="zoom-in">
            <p>{{ $careerdetail->sub_description }}</p>
        </div>
    </div>
    <!-- career-content-section-ends -->

    <ul class="career-auto-changer">

        <!-- slide-1 -->
        @if($careerdetail->images)
        @foreach(json_decode($careerdetail->images) as $key => $img)
        <li class="swiper-container" data-aos="zoom-in">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('./admin/uploads/career/'.$img)}}" alt="">
                </div>
            </div>
        </li>
        @endforeach
        @endif
        <!-- slide-1 -->


    </ul>
    <div class="clear"></div>



    <!-- career-sub-content -->

    <div data-aos="zoom-in"
        class="small-container career-sub-content text-center section-space-top section-space-bottom">
        <h2>{{ $careerdetail->opp_title }}</h2>
        <p>{{ $careerdetail->opp_description }}</p>
    </div>


    <!-- career-sub-content -->

    <div class="job-apply-form">
        @if (Session::has('form-submit'))
        <section class="popup">
            <div class="popup-inner">
                <div class="popup-content">
                    <div class="content alert alert-success text-center" id="success-content">
                        {{ Session::get('form-submit') }}
                    </div>
                </div>
            </div>
        </section>
        @elseif (Session::has('error'))
        <section class="popup">
            <div class="popup-inner">
                <div class="popup-content">
                    <div class="content alert alert-danger text-center">
                        {{ Session::get('error') }}
                    </div>
                </div>
            </div>
        </section>
        @endif
        <form action="{{ url('career/apply-job')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-div">
                <label>Full Name</label>
                <div class="form-div-right">
                    <input type="text" name="fullname" placeholder="Full Name">
                </div>
                @if($errors->has('fullname'))
                <p>
                <div class="text-danger">{{ $errors->first('fullname') }}</div>
                </p>
                @endif
            </div>
            <div class="form-div">
                <label>Email Address</label>
                <div class="form-div-right">
                    <input type="text" name="email" placeholder="Email Address">
                </div>
                @if($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-div">
                <label>Message</label>
                <div class="form-div-right">
                    <textarea name="message" placeholder="Your cover letter/message sent to the employer"></textarea>
                </div>
                @if($errors->has('message'))
                <div class="text-danger">{{ $errors->first('message') }}</div>
                @endif
            </div>

            <div class="form-div">
                <label>Upload CV (Optional)</label>
                <div class="form-div-right">
                    <input type="file" name="cv">
                    <span class="sub-label">Upload your CV/resume or any other relevant file. Max. file size: 10MB(PDF
                        type
                        only)</span>
                </div>
                @if($errors->has('cv'))
                <div class="text-danger">{{ $errors->first('cv') }}</div>
                @endif
            </div>
            <div class="form-div">
                <div class="button-1 submit arrow">
                    <input type="submit" value="Send application">
                </div>
            </div>
        </form>

    </div>



</div>







<!-- violet-strip-section-starts -->

<section class="violet-strip-common" data-aos="zoom-in">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center violet-strip-row">

            <div class="col-auto violet-strip-col">
                <h2>{{ $careerdetail->contact_title }}</h2>
            </div>
            <div class="col-auto violet-strip-col"><a href="{{ url('contact-us') }}" class="button-1 arrow">Contact
                    us</a></div>

        </div>

    </div>

</section>

<!-- violet-strip-section-starts -->

<section class="expolre-other-pages section-space-top section-space-top">
    <div class="container">
        <h2 data-aos="zoom-in">Explore Other Pages</h2>

        <div class="row">

            <!-- each-box -->
            <div class="col-sm-6 propert-column-box" data-aos="fade-up">
                <a href="" class="feature-thumb-bx-main">
                    <div class="hm-feature-thumb-bx for-overlay-hover">
                        <img src="{{ asset('./images/explore-other-page-thumb.jpg')}}" alt="">
                        <div class="for-hover-effect align-items-center">

                            <span class="button-4 arrow">read more</span>
                        </div>
                    </div>

                    <h4>Explore Opportunities at Chestertons</h4>
                </a>
            </div>
            <!-- each-box -->


            <!-- each-box -->
            <div class="col-sm-6 propert-column-box" data-aos="fade-up">
                <a href="" class="feature-thumb-bx-main">
                    <div class="hm-feature-thumb-bx  for-overlay-hover">
                        <img src="{{ asset('./images/explore-other-page-thumb2.jpg') }}" alt="">
                        <div class="for-hover-effect align-items-center">

                            <span class="button-4 arrow">read more</span>
                        </div>
                    </div>

                    <h4>Explore Opportunities at Chestertons</h4>
                </a>
            </div>
            <!-- each-box -->

        </div>
    </div>
</section>


<!-- popular-serach-section-starts -->
<section class="popular-search ">

    <!-- for-border-devider -->
    <div class="container border-container">
        <div class="border-devider"></div>
    </div>
    <!-- for-border-devider -->

    <div class="container popular-search-main  space-top space-bottom">

        @include('main-layouts.popular-searches')

        <!-- for-border-devider -->
        <div class="container border-container">
            <div class="border-devider"></div>
        </div>
        <!-- for-border-devider -->
        <div class="row bottom-discription space-top">
            <div class="row">
                <div class="cols-m-12" data-aos="fade-up">
                    <h2>About Chestertons</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                        et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                        voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                        gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                        amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                        amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                </div>

            </div>

        </div>
    </div>

</section>
<!-- popular-serach-section-ends -->
@endsection