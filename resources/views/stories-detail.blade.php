@extends('main-layouts.header')
<link href="{{ asset('css/style-J.css')}}" rel="stylesheet">
<link href="{{ asset('css/style-e.css')}}" rel="stylesheet">
@section('content')
  <!-- stories-section-starts -->

  <div class="social-icons-floating">

    <a href="" onClick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.title), 'facebook-share-window', 'height=450, width=550'); return false;" class="">
      <img src="{{ asset('./images/fb-fl-icon.svg')}}" alt="">
    </a>

    <a href="https://www.instagram.com/share?url={{ urlencode(Request::url()) }}" target="_blank" class="">
      <img src="{{ asset('./images/insta-fl-icon.svg')}}" alt="">
    </a>

    <a  href="https://www.messenger.com/?url={{ urlencode(Request::url()) }}" target="_blank"  class="">
      <img src="{{ asset('./images/messenger-fl-icon.svg')}}" alt="">
    </a>
    <a href="mailto:?subject=Check%20out%20this%20page&amp;body={{ urlencode(Request::url()) }}" target="_blank" class="">
      <img src="{{ asset('./images/email-fl-icon.svg')}}" alt="">
    </a>
    {{-- <a href="https://www.whatsapp.com/?text={{ urlencode(Request::url()) }}" target="_blank" class="">
      <img src="{{ asset('./images/messenger-fl-icon.svg')}}" alt="">
    </a> --}}
  </div>
  <section class="stories-details-section section-space-top section-space-bottom">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center px-5-lg" data-aos="zoom-in">
            <span class="small-title">{{ $story->stories_type }}</span>
            <h2>{{ $story->stories_title }}</h2>
            <span class="author-name">by William Liam</span>
            <span class="stories-d-t">{{ date_format($story->created_at, "F d, Y") }}</span> <span class="stories-d-t">Reading Time: 10 minutes</span>

          </div>
          <img class="img-fluid mb-5" src="{{ asset('admin/uploads/story/main_image/'.$story->main_image)}}">
          <h3>{{ $story->short_description}}</h3>
          <p>{!! $story->long_description !!}</p>
          <div class="row mb-4" data-aos="zoom-in">
            <?php $extImage = json_decode($story->extra_image) ?>
            @foreach ($extImage as $item)
              <div class="col-md-6 mb-3 mx-auto"><img class="img-fluid" src="{{ asset('admin/uploads/story/extra_image/'.$item)}}"> </div>
            @endforeach
            {{-- <div class="col-md-6 "><img class="img-fluid" src="{{ asset('images/stories-content-img2.jpg')}}"> </div> --}}
          </div>
          <p>Vivamus vestibulum, nunc a varius ultricies, elit massa posuere augue, nec porta ex neque eget ipsum. Donec
            eleifend euismod efficitur. Etiam elementum ligula et efficitur mattis. Morbi aliquet vitae ex a tempus.
            Mauris cursus, diam id imperdiet efficitur, quam tellus laoreet magna, at luctus metus tellus sit amet mi.
            Suspendisse pretium tincidunt odio, quis commodo nulla. Curabitur non felis nulla. Aenean hendrerit, neque
            sit amet iaculis feugiat, dui purus ultrices nisi, porttitor semper risus erat nec arcu. Donec faucibus
            lacus sed nunc luctus, sit amet aliquet est tempor. Mauris commodo metus ut neque lobortis, sed porttitor
            erat efficitur.</p>
        </div>

      </div>

    </div>

  </section>

  <!-- stories-section ends -->

  <!-- violet-strip-section-starts -->

  <section class="violet-strip-common" data-aos="zoom-in">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center violet-strip-row">

        <div class="col-auto violet-strip-col">
          <h2>Ready for a consultation?</h2>
        </div>
        <div class="col-auto violet-strip-col"><a href="" class="button-1 arrow">Contact us</a></div>

      </div>

    </div>

  </section>

  <!-- violet-strip-section-ends -->
  <section class="read-our-story-section space-top space-bottom" data-aos="fade-up">
  
  
    <div class="container">
      <div class="read-our-story-main">
        <h2>Similar stories</h2>
  
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
                <img src="{{ asset('images/read-our-story-block-img-2.png')}}" alt="" />
              </span><!--read-our-story-block-img-->
  
              <h6>Technology</h6>
  
              <p>Praesent egestas ut felis sollicitudin aliquam. Praesent tincidunt risus nunc</p>
  
              <label>January 16, 2023</label>
  
            </a><!--read-our-story-block-->
  
          </div><!--col-lg-4 col-sm-6-->
  
  
          <div class="col-lg-4 col-sm-6">
  
            <a href="#" class="read-our-story-block">
  
              <span class="read-our-story-block-img">
                <img src="{{ asset('images/read-our-story-block-img-3.png')}}" alt="" />
              </span><!--read-our-story-block-img-->
  
              <h6>Lifestyle</h6>
  
              <p>Proin dui sem, hendrerit quis consequat in, semper nec erat vehicula </p>
  
              <label>January 16, 2023</label>
  
            </a><!--read-our-story-block-->
  
          </div><!--col-lg-4 col-sm-6-->
  
        </div><!--row-->
  
      </div><!--read-our-story-main-->
    </div><!--container-->
  
  </section>

  <!-- popular-serach-section-starts -->

  <!-- popular-serach-section-starts -->
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