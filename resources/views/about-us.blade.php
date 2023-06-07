@extends('main-layouts.header')

@section('title', 'About Us')

@section('content')

	<!--about-top-sec-starts-->
	<section class="service-detail-ctn-wrap about-top-sec space-top space-bottom" data-aos="fade-up">
		
		<div class="container">
			
			<h1>About Chestertons</h1>
			
			<div class="service-detail-ctn-img space-bottom">
			<img src="{{ asset('admin/uploads/about-us/main_image/'.$about_us->main_image)}}" alt="" height="550px">
			</div><!--service-detail-ctn-img-->
			
			<div class="row service-detail-ctn">
				
				<div class="col-lg-5">
				<h3>{{ $about_us->short_desc }}</h3>
				</div><!--col-lg-6"-->
				
				<div class="col-lg-7">
				<p>{{ $about_us->long_desc}} </p>
				</div><!--col-lg-6"-->
			
			</div><!--row-->
			
			
		
		</div><!--container-->
	
	</section>
	<!--about-top-sec-end-->
	
	 <div class="container border-container"><div class="border-devider"></div></div>
	
	
	<!--image-ctn-sm-block-section-starts-->
    <section class="image-ctn-sm-block-section section-space-top section-space-bottom" data-aos="fade-down">
		
		<div class="container">
			
			<div class="image-ctn-sm-block">
				
				<div class="row align-items-center">
					
					<div class="col-md-6">
						<h2 class="d-block d-sm-none">Committed to a Sustainable, More Mindful Future</h2>
					<img src="{{ asset('admin/uploads/about-us/future_image/'.$about_us->future_image) }}" alt="" height="644px">
					</div><!--col-md-6-->
					
					<div class="col-md-6">
					<h2 class="d-none d-sm-block">{{ $about_us->future_title }}</h2>
						
						<p>{{ $about_us->future_desc }}</p>
					</div><!--col-md-6-->
				
				</div><!--row-->
			
			</div><!--mage-ctn-sm-block-->
		
		</div><!--container-->
	
	</section>
	<!--image-ctn-sm-block-section-end-->
	
	<div class="container border-container"><div class="border-devider"></div></div>
	
	
	<!--about-third-block-sec-starts-->
   <section class="service-detail-ctn-wrap about-third-block-sec section-space-top" data-aos="fade-up">
		
		<div class="container">
			
			<div class="row service-detail-ctn">
				
				<div class="col-lg-5">
				<h2>{{ $about_us->social_title }}</h2>
					<a href="{{ url('/foundations')}}" class="button-1 arrow">Our Foundation</a>
				</div><!--col-lg-6"-->
				
				<div class="col-lg-7">
				<p>{{ $about_us->social_desc }}</p>
					
					

				</div><!--col-lg-6"-->
			
			</div><!--row-->
			
			
		
		</div><!--container-->
	
	</section>
	<!--about-third-block-sec-end-->
	
	
<!-- full width carousel starts-->
<section class="full-width-swiper-wrap space-top section-space-bottom" data-aos="fade-down">


      <!-- Swiper -->
      <div class="swiper full-width-slides">
        <div class="swiper-wrapper">
          <!-- each-slide -->
		  @foreach(json_decode($about_us->social_images) as $picture)
		 
				<div class="swiper-slide">
					
					<div class="full-width-swiper-box">
					<img src="{{ asset('/admin/uploads/about-us/social_images/'.$picture) }}" class="img-fluid" alt="">

					</div>
				</div>
		  	@endforeach
          <!-- each-slide -->

          <!-- each-slide -->
          {{-- <div class="swiper-slide">

            <div class="full-width-swiper-box">
              <img src="{{ asset('./images/full-auto-slide-1.png') }}" class="img-fluid" alt="">

            </div>

          </div> --}}
          <!-- each-slide -->


          <!-- each-slide -->
          {{-- <div class="swiper-slide">

            <div class="full-width-swiper-box">
              <img src="{{ asset('./images/full-auto-slide-2.png') }}" class="img-fluid" alt="">

            </div>

          </div> --}}
          <!-- each-slide -->


          <!-- each-slide -->
          {{-- <div class="swiper-slide">

            <div class="full-width-swiper-box">
              <img src="{{ asset('./images/full-auto-slide-3.png') }}" class="img-fluid" alt="">

            </div>

          </div> --}}
          <!-- each-slide -->

          <!-- each-slide -->
          {{-- <div class="swiper-slide">

            <div class="full-width-swiper-box">
              <img src="{{ asset('./images/full-auto-slide-4.png') }}" class="img-fluid" alt="">

            </div>

          </div> --}}
          <!-- each-slide -->


          <!-- each-slide -->
          {{-- <div class="swiper-slide">

            <div class="full-width-swiper-box">
              <img src="{{ asset('./images/full-auto-slide-2.png') }}" class="img-fluid" alt="">

            </div>

          </div> --}}
          <!-- each-slide -->
        </div>

		   <div class="swiper-button-next"> </div>
        <div class="swiper-button-prev"> </div>
        <div class="center-pagination">
          <div class="swiper-pagination"></div>
        </div>

      </div>

      <!-- Swiper JS -->

</section>
<!-- full width carousel ends-->
	
	<div class="container border-container"><div class="border-devider"></div></div>
	
	
	<!--meet-our-team-section-starts-->
	<section class="meet-our-team-section section-space-top space-bottom" data-aos="fade-up">
		
		<div class="container">
			
			<div class="row meet-our-team-section-outer-row">
			
			<div class="col-lg-3">
			<h2>Meet <br> Our Team</h2>
			</div><!--"col-lg-3-->
			
			<div class="col-lg-9">
				
				<div class="row meet-our-team-section-inner-row">
					@foreach($our_team as $team_member)
						<div class="col-md-4 col-sm-6">
							<a href="#" class="our-team-block" data-bs-toggle="modal" data-bs-target="#exampleModal{{$team_member->id}}">
							
								<span class="meet-our-team-img">
								<img src="{{ asset('/admin/uploads/our-team/member_image/'.$team_member->member_image)}}" class="img-fluid" alt="">
								</span><!--meet-our-team-img-->
								
								<h4>{{ $team_member->member_name }}</h4>
								<label>{{ $team_member->member_position }} </label>
								
							</a>
						</div><!--col-md-4 -->
					@endforeach
					
					{{-- <div class="col-md-4 col-sm-6">
						
						<span class="meet-our-team-img">
						<img src="{{ asset('./images/our-team-2.png')}}" class="img-fluid" alt="">
						</span><!--meet-our-team-img-->
						
						<h6>Emersyn Hera </h6>
						<label>Chief Executive Officer</label>
					
					</div><!--col-md-4 -->
					
					
					<div class="col-md-4 col-sm-6">
						
						<span class="meet-our-team-img">
						<img src="{{ asset('./images/our-team-3.png') }}" class="img-fluid" alt="">
						</span><!--meet-our-team-img-->
						
						<h6>James Isaac</h6>
						<label>Chief Operating Officer</label>
					
					</div><!--col-md-4 -->
					
					
					<div class="col-md-4 col-sm-6">
						
						<span class="meet-our-team-img">
						<img src="{{ asset('./images/our-team-4.png') }}" class="img-fluid" alt="">
						</span><!--meet-our-team-img-->
						
						<h6>Imara Lenna </h6>
						<label>Chief Financial Officer</label>
					
					</div><!--col-md-4 -->
					
					
					<div class="col-md-4 col-sm-6">
						
						<span class="meet-our-team-img">
						<img src="{{ asset('./images/our-team-5.png') }}" class="img-fluid" alt="">
						</span><!--meet-our-team-img-->
						
						<h6>William Henry</h6>
						<label>Chief Technology Officer</label>
					
					</div><!--col-md-4 -->
					
					
					<div class="col-md-4 col-sm-6">
						
						<span class="meet-our-team-img">
						<img src="{{ asset('./images/our-team-5.png')}}" class="img-fluid" alt="">
						</span><!--meet-our-team-img-->
						
						<h6>Sasha Amira </h6>
						<label>Chief Legal Officer</label>
					
					</div><!--col-md-4 --> --}}
				
				</div><!--row-->

			</div><!--"col-lg-9-->
				
				</div><!--row-->
		
		</div><!--container-->
	
	</section>
	<!--meet-our-team-section-end-->
	
	
	<!--explore-history-section-starts-->
	<section class="explore-history-section" data-aos="fade-down">
	
		<div class="container-fluid">
		<div class="explore-history-block">
		<img src="{{ asset('./images/explore-history-img.png') }}" class="img-fluid" alt="">	
			
			<div class="explore-history-overlay">
				
				<div class="container">
				
				<div class="row align-items-end">
					
					<div class="col-md-7">
					<h2>Discover our Story of 
                     Resilience and Relationships</h2>
					</div><!--col-md-6-->
					
					<div class="col-md-5">
					<a href="{{ url('/history')}}" class="button-1 arrow">Explore our History</a>
					</div><!--col-md-6-->
				
				</div><!--row-->
					
					</div><!--container-->
			
			</div><!--explore-history-overlay-->
			
	   </div><!--explore-history-block-->
		</div><!--container-fluid-->
	
	</section>
	<!--explore-history-section-end-->
	
	
	<!--expolre-other-pages-starts-->
	<section class="expolre-other-pages section-space-top space-bottom" data-aos="fade-up">
  <div class="container">
    <h2>Explore Other Pages</h2>

    <div class="row">

         <!-- each-box -->
<div class="col-sm-6 propert-column-box" data-aos="fade-up">
  <a href="" class="feature-thumb-bx-main">
    <div class="hm-feature-thumb-bx for-overlay-hover">
     <img src="{{ asset('./images/about-explore-1.png') }}" alt="">
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
     <img src="{{ asset('./images/about-explore-2.png') }}" alt="">
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
<!--expolre-other-pages-end-->
	
	
<!-- popular-serach-section-starts -->
<section class="popular-search ">
  
  <!-- for-border-devider -->
  <div class="container border-container"><div class="border-devider"></div></div>
  <!-- for-border-devider -->
  
  <div class="container popular-search-main  space-top space-bottom">

    @include('main-layouts.popular-searches')
  
</div>

</section>
<!-- popular-serach-section-ends -->



	
<!-- Modal -->

@foreach($our_team as $item)
<div class="modal fade our-team-popup" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			
				<div class="modal-body">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="{{ asset('./images/close-icon.png') }}" alt=""></button>
					
					<div class="row align-items-end">
						
					<div class="col-sm-5">
						
						<div class="meet-our-team-img">
									<img src="{{ asset('/admin/uploads/our-team/member_image/'.$item->member_image) }}" class="img-fluid" alt="" style="width:286px;height:323px">
									</div><!--meet-our-team-img-->
						
						</div><!--col-md-5-->
						
						<div class="col-sm-7">
						<h2>{{ $item->member_name }} </h2>
							<label>{{ $item->member_position }}</label>
						
						</div><!--col-md-5-->
						
					</div><!--row-->
					
					<p>{{ $item->member_desc }}</p>
					
				</div><!--modal-body-->
			</div>
		</div>
</div><!--modal-->
@endforeach


@endsection
