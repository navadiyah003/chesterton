@extends('main-layouts.header')

@section('content')
    <!-- stories-section-starts -->
    <section class="stories-section section-space-top section-space-bottom">

        <div class="container" data-aos="zoom-in">
            <h1>Stories from Chestertons</h1>
            <div class="row">
                <div class="col-md-7">
                    @if ($stories[0])    
                        <a href="{{ url('/stories-detail', $stories[0]->id) }}" class="read-our-story-block read-our-story-block-lg ">

                            <span class="read-our-story-block-img">
                                <img src="admin/uploads/story/main_image/{{ $stories[0]->main_image }}" alt="" style="height: 550px;"/>
                            </span>
                            <!--read-our-story-block-img-->

                            <h6>{{ $stories[0]->stories_type }}</h6>

                            <p>{{ $stories[0]->short_description }}</p>

                            <label>{{ date_format($stories[0]->created_at,"F d, Y") }}</label>

                        </a>
                        <!--read-our-story-block-->
                    @endif



                    
                </div>
                <div class="col-md-5">
                    @if ($stories[0]) 
                    <a href="{{ url('/stories-detail', $stories[1]->id) }}" class="read-our-story-block">

                        <span class="read-our-story-block-img">
                            <img src="admin/uploads/story/main_image/{{ $stories[1]->main_image }}" alt="" style="height: 390px;"/>
                        </span>
                        <!--read-our-story-block-img-->

                        <h6>{{ $stories[1]->stories_type }}</h6>

                        <p>{{ $stories[1]->short_description }}</p>

                        <label>{{ date_format($stories[1]->created_at,"F d, Y") }}</label>

                    </a>
                    <!--read-our-story-block-->

                    <div class="border-devider"></div>
                    @endif

                    <a href="{{ url('/stories-detail', $stories[2]->id) }}" class="read-our-story-block">

                        <span class="read-our-story-block-img">
                            <img src="admin/uploads/story/main_image/{{ $stories[2]->main_image }}" alt="" style="height: 390px;"/>
                        </span>
                        <!--read-our-story-block-img-->

                        <h6>{{ $stories[2]->stories_type }}</h6>

                        <p>{{ $stories[2]->short_description }}</p>

                        <label>{{ date_format($stories[2]->created_at,"F d, Y") }}</label>

                    </a>
                    <!--read-our-story-block-->


                </div>

            </div>

        </div>

    </section>

    <!-- stories-section ends -->

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
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" onclick="lifestyle()" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Lifestyle</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" onclick="intelligence()" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Intelligence</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" onclick="technology()" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-d" type="button" role="tab" aria-controls="pills-d"
                                    aria-selected="false">Technology</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" onclick="opinion()" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-e" type="button" role="tab" aria-controls="pills-e"
                                    aria-selected="false">Opinion</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                @foreach ($stories as $story) 
                                <div class="col-lg-4 col-sm-6">

                                    <a href="{{ url('/stories-detail', $story->id) }}" class="read-our-story-block">

                                        <span class="read-our-story-block-img">
                                            <img src="admin/uploads/story/main_image/{{ $story->main_image }}" alt="" style="height: 245px;" />
                                        </span>
                                        <!--read-our-story-block-img-->

                                        <h6>{{ $story->stories_type }}</h6>

                                        <p>{{ $story->short_description }}</p>

                                        <label>{{ date_format($story->created_at, "F d, Y") }}</label>
                                        {{-- <label>January 16, 2023</label> --}}

                                    </a>
                                    <!--read-our-story-block-->

                                </div>
                                @endforeach
                                <!--col-lg-4 col-sm-6-->

                                {{-- <div class="col-lg-4 col-sm-6">

                                    <a href="#" class="read-our-story-block">

                                        <span class="read-our-story-block-img">
                                            <img src="{{ asset('images/read-our-story-block-img-2.png')}}" alt="" />
                                        </span>
                                        <!--read-our-story-block-img-->

                                        <h6>Technology</h6>

                                        <p>Praesent egestas ut felis sollicitudin aliquam. Praesent tincidunt risus nunc</p>

                                        <label>January 16, 2023</label>

                                    </a>
                                    <!--read-our-story-block-->

                                </div>
                                <!--col-lg-4 col-sm-6-->


                                <div class="col-lg-4 col-sm-6">

                                    <a href="#" class="read-our-story-block">

                                        <span class="read-our-story-block-img">
                                            <img src="{{ asset('images/read-our-story-block-img-3.png')}}" alt="" />
                                        </span>
                                        <!--read-our-story-block-img-->

                                        <h6>Lifestyle</h6>

                                        <p>Proin dui sem, hendrerit quis consequat in, semper nec erat vehicula </p>

                                        <label>January 16, 2023</label>

                                    </a>
                                    <!--read-our-story-block-->

                                </div>
                                <!--col-lg-4 col-sm-6--> --}}

                            </div>
                            {{-- <!--row-->
                            <div class="row">

                                <div class="col-lg-4 col-sm-6">

                                    <a href="#" class="read-our-story-block">

                                        <span class="read-our-story-block-img">
                                            <img src="{{ asset('images/read-our-story-block-img-1.png')}}" alt="" />
                                        </span>
                                        <!--read-our-story-block-img-->

                                        <h6>Intelligence</h6>

                                        <p>Praesent blandit egestas porta. Morbi egestas vel arcu at mattis</p>

                                        <label>January 16, 2023</label>

                                    </a>
                                    <!--read-our-story-block-->

                                </div>
                                <!--col-lg-4 col-sm-6-->

                                <div class="col-lg-4 col-sm-6">

                                    <a href="#" class="read-our-story-block">

                                        <span class="read-our-story-block-img">
                                            <img src="{{ asset('images/read-our-story-block-img-2.png')}}" alt="" />
                                        </span>
                                        <!--read-our-story-block-img-->

                                        <h6>Technology</h6>

                                        <p>Praesent egestas ut felis sollicitudin aliquam. Praesent tincidunt risus nunc</p>

                                        <label>January 16, 2023</label>

                                    </a>
                                    <!--read-our-story-block-->

                                </div>
                                <!--col-lg-4 col-sm-6-->


                                <div class="col-lg-4 col-sm-6">

                                    <a href="#" class="read-our-story-block">

                                        <span class="read-our-story-block-img">
                                            <img src="{{ asset('images/read-our-story-block-img-3.png')}}" alt="" />
                                        </span>
                                        <!--read-our-story-block-img-->

                                        <h6>Lifestyle</h6>

                                        <p>Proin dui sem, hendrerit quis consequat in, semper nec erat vehicula </p>

                                        <label>January 16, 2023</label>

                                    </a>
                                    <!--read-our-story-block-->

                                </div>
                                <!--col-lg-4 col-sm-6-->

                            </div>
                            <!--row--> --}}
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row" id="lifestyle">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row" id="intelligence">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-d" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row" id="technology">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-e" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row" id="opinion">
                            </div>
                        </div>
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

    <!-- stories-section-starts -->
    <section class="otherpage-section section-space-top section-space-bottom" data-aos="zoom-in">

        <div class="container">
            <h2>Explore Other Pages</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="wg-box-content">

                        <div class="wg-box-content-overlay"></div>
                        <img class="wg-box-content-image" src="{{ asset('images/otherpage-img1.jpg')}}">
                        <div class="wg-box-content-details wg-box-fadeIn-bottom">
                            <a href="" class="button-2 arrow">Read More</a>
                        </div>
                    </div>
                    <h5>Discover our property management services</h5>
                </div>
                <div class="col-md-6">
                    <div class="wg-box-content">

                        <div class="wg-box-content-overlay"></div>
                        <img class="wg-box-content-image" src="{{ asset('images/otherpage-img2.jpg')}}">
                        <div class="wg-box-content-details wg-box-fadeIn-bottom">
                            <a href="" class="button-2 arrow">Read More</a>
                        </div>
                    </div>
                    <h5>Learn more about Chestertons</h5>
                </div>

            </div>

        </div>

    </section>

    <!-- stories-section ends -->



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

@push('scripts')
    <script>
        function lifestyle() {
            $.ajax({
                url: '/stories-listing',
                data: {data: 'lifestyle'},
                success: function(data) {
                    $('#lifestyle').html(data.typeSearch);
                }
            });
        }

        function intelligence() {
            $.ajax({
                type:'GET',
                url: '/stories-listing',
                data: {data: 'intelligence'},
                success: function(data) {
                    $('#intelligence').html(data.typeSearch);
                }
            });
        }

        function technology() {
            $.ajax({
                url: '/stories-listing',
                data: {data: 'technology'},
                success: function(data) {
                    $('#technology').html(data.typeSearch);
                }
            });
        }

        function opinion() {
            $.ajax({
                url: '/stories-listing',
                data: {data: 'opinion'},
                success: function(data) {
                    $('#opinion').html(data.typeSearch);
                }
            });
        }
    </script>
@endpush