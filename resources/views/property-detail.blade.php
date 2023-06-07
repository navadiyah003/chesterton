@extends('main-layouts.header')

@section('title', 'Property list')
 
@section('content')

  <!-- floating-form -->
  <div class="for-floating-form">
    <div class="float-form-main-div">
      <div class="floating-form-icon" id="float-form-click">
        <span>I’m interested!</span>
        <img src="{{ asset('./images/chat-icon.svg') }}" alt="test">
      </div>
      <div class="floating-form" id="floating-form-sec">
        <div class="close-div">
          <a class="close-form" id="close-form">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.405" height="18.406" viewBox="0 0 18.405 18.406">
              <g id="Group_30834" data-name="Group 30834" transform="translate(6902.561 -89.439)">
                <path id="Path_1929" data-name="Path 1929" d="M-6903.579,90.579l16.284,16.285"
                  transform="translate(2.079 -0.079)" fill="none" stroke="#707070" stroke-linecap="round"
                  stroke-width="1.5" />
                <path id="Path_1930" data-name="Path 1930" d="M-6887.3,90.579l-16.284,16.285"
                  transform="translate(2.08 -0.079)" fill="none" stroke="#707070" stroke-linecap="round"
                  stroke-width="1.5" />
              </g>
            </svg>

          </a>
        </div>
        <h4>Get in Touch</h4>
        <div class="form-section">

          <div class="floating-label-group">
            <input type="text" id="username" class="form-control" autocomplete="off" />
            <label class="floating-label">Username</label>
          </div>
          <div class="floating-label-group">
            <input type="text" id="username" class="form-control" autocomplete="off" />
            <label class="floating-label">Username</label>
          </div>

          <div class="floating-label-group">
            <input type="text" id="username" class="form-control" autocomplete="off" />
            <label class="floating-label">Username</label>
          </div>



          <div class="floating-label-group">
            <textarea type="text" class="form-control"></textarea>

            </textarea>
            <label class="floating-label">Message</label>
          </div>
          <div class="submit-field">
            <input type="submit" class="submit-bttn" value="SEND">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- floating-form -->
<!-- property-detail-gallery-section -->

<section class="propert-detail-bannner-gallery section-space-bottom">

  <div class="container-fluid p-0">

    <div class="row m-0">

      <?php $propName =  explode(", ",$property->propertyName)?>
      <div class="col-sm-5 col-12 propert-detail-discriptions space-top" data-aos="fade-up">
        <h2>{{ $propName[0] }}</h2>
        {{-- <h2>2 Bedroom <br> Apartment in London</h2> --}}
        <p>{{ $property->shortDescription }}</p>
        <div class="amenitites">
           <div class="row amenitites-row">
              @if ($property->bedrooms)
              <div class="col-md-auto col-6 amts-box">
                <img src="{{ asset('./images/bed-icon-amts.svg')}}">
                <span class="count">{{ $property->bedrooms ? $property->bedrooms : 0 }}</span>
              </div>
              @endif

              @if ($property->bathrooms)
              <div class="col-md-auto col-6 amts-box">
                <img src="{{ asset('./images/bath-icon-amts.svg') }}">
                <span class="count">{{ $property->bathrooms ? $property->bathrooms : 0 }}</span>
              </div>
              @endif

              @if ($property->diningRooms)
              <div class="col-md-auto col-6 amts-box">
                <img src="{{ asset('./images/table-icon-amts.svg') }}">
                <span class="count">{{ $property->diningRooms }}</span>
              {{-- <span class="count">{{ $property->diningRooms ? $property->diningRooms : 0 }}</span> --}}
              </div>
              @endif
              
              @if ($property->coveredArea)
              <div class="col-md-auto col-6 amts-box">
                <img src="{{ asset('./images/area-icon-amts.svg') }}">
                <span class="count">{{ $property->coveredArea }} {{ $property->measureUnit == "Square Foot" ? "sq. ft" : "" }}</span>
              </div>
              @endif             
           </div>

           <div class="small-devider"></div>
        </div>
       
        <div class="price-starting">
          <span class="start-from">starting from</span>
          <span class="price">£{{ number_format($property->price) }}</span>
        </div>

      </div>
      <div class="col-sm-6 col-12 property-detail-gallery-sec" data-aos="fade-up">

        <!-- Swiper -->
        <div class="swiper prod-slider">
          <div class="swiper-wrapper h-auto">
            @if ($property->images != "null")    
              @for ($i = 0; $i < 2; $i++)
                <?php $image =  explode(",",$property->images)?>
                <!-- each-slide -->
                <div class="swiper-slide"> 
                  <img src="{{ $image[$i] }}" alt="" style="height: 670px;">
                </div>
                <!-- each-slide -->
                    
              @endfor
            @else
              <div class="swiper-slide"> 
                <img src="{{ asset('./images/prop-detail-slider-1.jpg') }}" alt="" >
              </div>
            @endif
            {{-- @foreach (explode(",",$property->images) as $item)
            @endforeach --}}
            {{-- <!-- each-slide -->
            <div class="swiper-slide"> 
              <img src="{{ asset('./images/prop-detail-slider-1.jpg') }}" alt="" >
            </div>
          <!-- each-slide --> --}}

          </div>

          <div class="gallery-links-controls">

            <div class="nav-control-2">


                <div class="swiper-button-prev">
                  <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55">
                    <g id="Group_31957" data-name="Group 31957" transform="translate(-786 -2206)">
                      <g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(804.426 2227.083)">
                        <path id="Path_1959" data-name="Path 1959" d="M26.069,18H7.5" transform="translate(-7.5 -11.696)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        <path id="Path_1960" data-name="Path 1960" d="M24.3,7.5,18,13.8l6.3,6.3" transform="translate(-18 -7.5)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                      </g>
                      <g id="Ellipse_35" data-name="Ellipse 35" transform="translate(786 2206)" fill="none" stroke="#bc8418" stroke-width="1.5">
                        <circle cx="27.5" cy="27.5" r="27.5" stroke="none"/>
                        <circle cx="27.5" cy="27.5" r="26.75" fill="none"/>
                      </g>
                    </g>
                  </svg> 
                </div>

                <div class="swiper-button-next">
                  <svg xmlns="http://www.w3.org/2000/svg" width="54" height="55" viewBox="0 0 54 55">
                    <g id="Group_31958" data-name="Group 31958" transform="translate(-866 -2206)">
                      <g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(883.841 2227.083)">
                        <path id="Path_1959" data-name="Path 1959" d="M7.5,18H26.069" transform="translate(-7.5 -11.696)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        <path id="Path_1960" data-name="Path 1960" d="M18,7.5l6.3,6.3-6.3,6.3" transform="translate(-5.736 -7.5)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                      </g>
                      <g id="Ellipse_36" data-name="Ellipse 36" transform="translate(866 2206)" fill="none" stroke="#bc8418" stroke-width="1.5">
                        <ellipse cx="27" cy="27.5" rx="27" ry="27.5" stroke="none"/>
                        <ellipse cx="27" cy="27.5" rx="26.25" ry="26.75" fill="none"/>
                      </g>
                    </g>
                  </svg>
                </div>
            </div>
            <div class="gallery-links">
              <a id="pop-gallery-click" class="button-1"> <span class="photo-count"><img src="{{ asset('./images/photos-icon.svg')}}"><i id="countnotif"></i>  photos</span> </a>
              <a href="" class="button-1 arrow" >Express Interest</a>
            </div>
          </div>
        </div>

      <!-- Swiper JS -->

      </div>

    </div>
  </div>

</section>

<!-- property-detail-gallery-section-ends -->

<!-- propert-search-listing-section -->
<section class="property-overview ">
<div class="container">
<div class="row  property-overview-row section-space-top section-space-bottom justify-content-between">

  <div class="col-md-12 col-lg-7 property-overview-col-left inner-content-section space-bottom-mob" data-aos="fade-up">
    <h2>Overview</h2>
    <p>{!! $property->longDescription  !!}</p>
    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
    <ul >
      <li>Lorem Ipsum is simply dummy text of the printing</li>
      <li>Lorem Ipsum is simply dummy text of the printing</li>
      <li>Lorem Ipsum is simply dummy text of the printing</li>
      <li>Lorem Ipsum is simply dummy text of the printing</li>
      <li>Lorem Ipsum is simply dummy text of the printing</li>
      <li>Lorem Ipsum is simply dummy text of the printing</li>
     </ul> --}}
 
  </div>
  <div class="col-md-12 col-lg-4  property-overview-col-right" data-aos="fade-up">

    <div class="cont-agent">
      <h4>Contact Agent</h4>
      <div class="row">
        <div class="col-sm-4 agent-thumb">
          <img src="{{ asset('./images/agent-thumb.jpg')}}" alt="">
        </div>
        <div class="col-sm-8 agent-details">
          
          <h5>{{ $agent->agent_name }}</h5>
          <ul>
            <li>
              <a href="" class=""><svg xmlns="http://www.w3.org/2000/svg" width="15.61" height="15.637" viewBox="0 0 15.61 15.637">
                <path id="Icon_feather-phone-call" data-name="Icon feather-phone-call" d="M11.859,4.187A3.359,3.359,0,0,1,14.512,6.84M11.859,1.5A6.045,6.045,0,0,1,17.2,6.833m-.672,5.36v2.015a1.343,1.343,0,0,1-1.464,1.343,13.293,13.293,0,0,1-5.8-2.062,13.1,13.1,0,0,1-4.03-4.03A13.293,13.293,0,0,1,3.173,3.636,1.343,1.343,0,0,1,4.51,2.172H6.525A1.343,1.343,0,0,1,7.869,3.327a8.625,8.625,0,0,0,.47,1.888,1.343,1.343,0,0,1-.3,1.417l-.853.853a10.748,10.748,0,0,0,4.03,4.03l.853-.853a1.343,1.343,0,0,1,1.417-.3,8.625,8.625,0,0,0,1.888.47A1.343,1.343,0,0,1,16.527,12.194Z" transform="translate(-2.417 -0.672)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
              </svg>
               <span>{{ $agent->agent_mobileNumber }}</span></a>
            </li>

            <li>


              <a href="mailto:{{ $agent->agent_email }}" class=""><svg xmlns="http://www.w3.org/2000/svg" width="17.089" height="13.5" viewBox="0 0 17.089 13.5">
                <g id="Icon_feather-mail" data-name="Icon feather-mail" transform="translate(-1.955 -5.25)">
                  <path id="Path_1940" data-name="Path 1940" d="M4.5,6h12A1.5,1.5,0,0,1,18,7.5v9A1.5,1.5,0,0,1,16.5,18H4.5A1.5,1.5,0,0,1,3,16.5v-9A1.5,1.5,0,0,1,4.5,6Z" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                  <path id="Path_1941" data-name="Path 1941" d="M18,9l-7.5,5.25L3,9" transform="translate(0 -1.5)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                </g>
              </svg>
              
               <span>{{ $agent->agent_email }}</span></a>
            </li>
            
          </ul>


        </div>
      </div>
    </div>

      <div class="value-property-box">
          <h3>How Much is my Property Worth?</h3>
           <a href="" class="button-1 arrow">Value my property</a>
      </div>
      <div class="social-icons-one">
        <h4>Share</h4>
        <span class="devider"></span>
        <a href="" onClick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.title), 'facebook-share-window', 'height=450, width=550'); return false;" class="soc-link fb">
          <svg xmlns="http://www.w3.org/2000/svg" width="25.022" height="24.871" viewBox="0 0 25.022 24.871">
          <path id="social-fb-icon" d="M25.585,13.074a12.511,12.511,0,1,0-14.466,12.36V16.69H7.941V13.074h3.178V10.317c0-3.135,1.867-4.867,4.725-4.867a19.254,19.254,0,0,1,2.8.244V8.771H17.067a1.808,1.808,0,0,0-2.039,1.954v2.348H18.5l-.555,3.617H15.028v8.743A12.516,12.516,0,0,0,25.585,13.074Z" transform="translate(-0.563 -0.563)" fill="#bc8418"/>
        </svg>
        </a>
        <a href="" onClick="window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(document.URL) + '&text=' + encodeURIComponent(document.title), 'twitter-share-window', 'height=450, width=550'); return false;" class="soc-link tw">
          <svg xmlns="http://www.w3.org/2000/svg" width="29.906" height="24.29" viewBox="0 0 29.906 24.29">
            <path id="social-twitter-icon" d="M26.832,9.434c.019.266.019.531.019.8,0,8.1-6.167,17.439-17.439,17.439A17.321,17.321,0,0,1,0,24.919a12.68,12.68,0,0,0,1.48.076A12.275,12.275,0,0,0,9.09,22.376a6.14,6.14,0,0,1-5.731-4.251,7.73,7.73,0,0,0,1.158.095,6.483,6.483,0,0,0,1.613-.209A6.13,6.13,0,0,1,1.214,12V11.92a6.173,6.173,0,0,0,2.771.778,6.138,6.138,0,0,1-1.9-8.2,17.422,17.422,0,0,0,12.638,6.414,6.919,6.919,0,0,1-.152-1.4A6.135,6.135,0,0,1,25.181,5.316a12.067,12.067,0,0,0,3.89-1.48,6.113,6.113,0,0,1-2.695,3.378,12.287,12.287,0,0,0,3.53-.949,13.176,13.176,0,0,1-3.074,3.169Z" transform="translate(0 -3.381)" fill="#bc8418"/>
          </svg>
          
        </a>
        <a href="" class="soc-link messenger">
          <svg xmlns="http://www.w3.org/2000/svg" width="24.6" height="24.602" viewBox="0 0 24.6 24.602">
            <path id="social-messenger-icon" d="M0,11.931C0,5.074,5.37,0,12.3,0S24.6,5.074,24.6,11.931,19.228,23.861,12.3,23.861a13.423,13.423,0,0,1-3.557-.471.984.984,0,0,0-.656.051l-2.45,1.076a.984.984,0,0,1-1.384-.871l-.072-2.193a.994.994,0,0,0-.328-.7A11.674,11.674,0,0,1,0,11.931ZM8.527,9.686l-3.608,5.74a.578.578,0,0,0,.84.769l3.885-2.942a.723.723,0,0,1,.892,0l2.87,2.152a1.85,1.85,0,0,0,2.665-.492l3.608-5.74a.578.578,0,0,0-.84-.769l-3.885,2.942a.709.709,0,0,1-.881,0L11.2,9.194a1.845,1.845,0,0,0-2.675.492Z" transform="translate(0.002)" fill="#bc8418"/>
          </svg>
          
        </a>
        <a href="" class="soc-link mail"><svg xmlns="http://www.w3.org/2000/svg" width="26.196" height="20.957" viewBox="0 0 26.196 20.957">
          <path id="social-mail-icon" d="M26.577,6H5.62A2.616,2.616,0,0,0,3.013,8.62L3,24.337a2.627,2.627,0,0,0,2.62,2.62H26.577a2.627,2.627,0,0,0,2.62-2.62V8.62A2.627,2.627,0,0,0,26.577,6Zm0,5.239L16.1,17.788,5.62,11.239V8.62L16.1,15.169,26.577,8.62Z" transform="translate(-3 -6)" fill="#bc8418"/>
        </svg>
        </a>
        <a href="" class="soc-link wtsapp">
          <svg xmlns="http://www.w3.org/2000/svg" width="24.602" height="24.602" viewBox="0 0 24.602 24.602">
            <path id="social-watsapp-icon" d="M14.774,2.25A12.031,12.031,0,0,0,2.7,14.234,11.86,11.86,0,0,0,4.43,20.423l-2.18,6.43,6.687-2.124A12.1,12.1,0,0,0,26.852,14.234,12.031,12.031,0,0,0,14.774,2.25ZM20.78,18.786a3.12,3.12,0,0,1-2.136,1.377c-.566.03-.583.439-3.671-.9a12.6,12.6,0,0,1-5.092-4.814,5.923,5.923,0,0,1-1.139-3.21A3.422,3.422,0,0,1,9.917,8.724a1.183,1.183,0,0,1,.836-.352c.243,0,.4-.007.581,0s.45-.038.684.584.793,2.15.865,2.306a.56.56,0,0,1,.006.537,2.1,2.1,0,0,1-.327.5c-.161.173-.339.387-.483.519-.16.146-.328.306-.159.619a9.242,9.242,0,0,0,1.635,2.182,8.427,8.427,0,0,0,2.422,1.61c.3.165.484.147.671-.051s.8-.865,1.021-1.163.421-.24.7-.128,1.766.909,2.069,1.074.5.249.577.379A2.536,2.536,0,0,1,20.78,18.786Z" transform="translate(-2.25 -2.25)" fill="#bc8418"/>
          </svg>
          
        </a>
      </div>

  </div>

</div>
  <!-- for-border-devider -->
  <div class="container border-container"><div class="border-devider"></div></div>
  <!-- for-border-devider -->
<div class="row legacy-row  section-space-top section-space-bottom " data-aos="fade-up">
  <div class="col-sm-6 legacy-thumb-left">
  <img src="{{ asset('./images/location-thumb.jpg') }}" alt="">
  
  </div>
  <div class="col-sm-6 legacy-right">
    <div class="discriptions">

    <span class="small-title">about finchely</span>
    <h2>Discover <br>
      Finchely, London</h2>
      <span class="devider"></span>
      <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximus id tincidunt placerat ex elementum ipsum Morbi tincidunt malesuada cursus vitae lacus Donec nisi cursus nisl. urna. Vestibulum urna. commodo risus nec non ullamcorper diam  nibh tincidunt urna elit faucibus ac vitae sed id adipiscing tincidunt placerat.</p>
      <a href="" class="button-1 arrow">learn more</a>
    </div>
    </div>
</div>

</div>


      <!-- for-border-devider -->
      <div class="container border-container" ><div class="border-devider"></div></div>
      <!-- for-border-devider -->

</section>

<!-- propert-search-listing-section ends -->

<!-- explore-similar-products -->
<section class="section-space-top section-space-bottom">

<div class="container">
<h2>Explore Similar Properties</h2>
  <div class="row">

   <!-- each-box -->
<div class="col-sm-4 propert-column-box" data-aos="fade-up">
  <a href="" class="feature-thumb-bx-main">
    <div class="hm-feature-thumb-bx for-overlay-hover">
     <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="">
     <div class="for-hover-effect">
      <p>A meticulously renovated residence in the sought-after Finchley Area, complimented with a large, private terrace overlooking the city horizon.</p>
      <span class="button-4 arrow">View</span> 
    </div>
    </div>
    <span class="location">London, United Kingdom</span>
    <h4>2 Bedroom Apartment</h4>
    <span class="price">$19,000,000</span>
   </a>
</div>
 <!-- each-box -->
  <!-- each-box -->
  <div class="col-sm-4 propert-column-box" data-aos="fade-up">
    <a href="" class="feature-thumb-bx-main">
      <div class="hm-feature-thumb-bx for-overlay-hover">
       <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="">
       <div class="for-hover-effect">
        <p>A meticulously renovated residence in the sought-after Finchley Area, complimented with a large, private terrace overlooking the city horizon.</p>
        <span class="button-4 arrow">View</span> 
      </div>
      </div>
      <span class="location">London, United Kingdom</span>
      <h4>2 Bedroom Apartment</h4>
      <span class="price">$19,000,000</span>
     </a>
  </div>
   <!-- each-box -->

     <!-- each-box -->
<div class="col-sm-4 propert-column-box" data-aos="fade-up">
  <a href="" class="feature-thumb-bx-main">
    <div class="hm-feature-thumb-bx for-overlay-hover">
     <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="">
     <div class="for-hover-effect">
      <p>A meticulously renovated residence in the sought-after Finchley Area, complimented with a large, private terrace overlooking the city horizon.</p>
      <span class="button-4 arrow">View</span> 
    </div>
    </div>
    <span class="location">London, United Kingdom</span>
    <h4>2 Bedroom Apartment</h4>
    <span class="price">$19,000,000</span>
   </a>
</div>
 <!-- each-box -->

  </div>

</div>

</section>
<!-- explore-similar-products-ends -->



<!-- popular-serach-section-starts -->
<section class="popular-search ">
  
  <!-- for-border-devider -->
  <div class="container border-container"><div class="border-devider"></div></div>
  <!-- for-border-devider -->
  
   <div class="container popular-search-main  space-top space-bottom">

     @include('main-layouts.popular-searches')
   
      <!-- for-border-devider -->
  <div class="container border-container" data-aos="fade-up"><div class="border-devider"></div></div>
  <!-- for-border-devider -->
    <div class="row bottom-discription space-top">
      <div class="row">
        <div class="cols-m-12" data-aos="fade-up">
          <h2>About Chestertons</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
        </div>
       
      </div>
      
    </div>
</div>

</section>
<!-- popular-serach-section-ends -->



<!-- pop-gallery-swiper -->

<div class="pop-overlay" id="pop-gallery-main">

<div class="swiper-gallery-main">
  <a class="close-pop-gallery" id="close-pop-gallery">
    <svg xmlns="http://www.w3.org/2000/svg" width="18.406" height="18.406" viewBox="0 0 18.406 18.406">
    <g id="Group_30853" data-name="Group 30853" transform="translate(6902.561 -89.439)">
      <path id="Path_1929" data-name="Path 1929" d="M-6903.579,90.579l16.284,16.285" transform="translate(2.079 -0.079)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-width="1.5"/>
      <path id="Path_1930" data-name="Path 1930" d="M-6887.3,90.579l-16.284,16.285" transform="translate(2.08 -0.079)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-width="1.5"/>
    </g>
  </svg>
  </a>
  <!-- Swiper -->
  <div class="swiper gallery-slider" >
   <div style="height:60vh;" class="swiper-wrapper pop-gallery-slide">
    @if ($property->images != "null")
      @foreach (explode(",",$property->images) as $item)
        <!-- each-slider -->
        <div class="swiper-slide" style="overflow: hidden;">
          <img src={{ $item }} alt={{ $item }}>
          {{-- <img src={{ asset('./images/gallery-image-1.jpg') }} alt={{ $item }}> --}}
        </div>
        <!-- each-slider -->
      @endforeach
    @else
      <div class="swiper-slide" style="overflow: hidden;">
        <img src="{{ asset('./images/gallery-image-1.jpg') }}" alt="">
      </div>
    @endif

           {{-- <!-- each-slider -->
           <div class="swiper-slide" style="overflow: hidden;">
             <img src="{{ asset('./images/gallery-image-1.jpg') }}" alt="">
           </div>
           <!-- each-slider -->


                 <!-- each-slider -->
     <div class="swiper-slide" style="overflow: hidden;">
       <img src="{{ asset('./images/gallery-image-1.jpg') }}" alt="">
     </div>
     <!-- each-slider -->

     <!-- each-slider -->
     <div class="swiper-slide" style="overflow: hidden;">
      <img src="{{ asset('./images/gallery-image-1.jpg') }}" alt="">
    </div>
    <!-- each-slider -->

    <!-- each-slider -->
    <div class="swiper-slide" style="overflow: hidden;">
      <img src="{{ asset('./images/gallery-image-1.jpg') }}" alt="">
    </div>
    <!-- each-slider --> --}}


   </div>
   <div class="pop-gallery-controll">

    <div class="swiper-button-prev">
      <svg xmlns="http://www.w3.org/2000/svg" width="30.739" height="16.468" viewBox="0 0 30.739 16.468">
        <g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(0.75 1.061)">
          <path id="Path_1938" data-name="Path 1938" d="M36.739,18H7.5" transform="translate(-7.5 -10.827)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
          <path id="Path_1939" data-name="Path 1939" d="M25.174,7.5,18,14.673l7.174,7.173" transform="translate(-18 -7.5)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
        </g>
      </svg>
      
    </div>
    <div class="swiper-pagination"></div>

    <div class="swiper-button-next">
      <svg xmlns="http://www.w3.org/2000/svg" width="30.739" height="16.468" viewBox="0 0 30.739 16.468">
        <g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(15.048 -6.439)">
          <path id="Path_1938" data-name="Path 1938" d="M7.5,18H36.739" transform="translate(-21.798 -3.327)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
          <path id="Path_1939" data-name="Path 1939" d="M18,7.5l7.173,7.173L18,21.847" transform="translate(-10.232)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
        </g>
      </svg>
    </div>

  </div>
 </div>

 <!-- Swiper JS --> 
</div>

</div>
<!-- pop-gallery-swiper-ends -->


@endsection

@push('scripts')
<script>
  console.log('here');
  const floatClick = document.getElementById('float-form-click');
  const floatFormSec = document.getElementById('floating-form-sec');
  const closeForm = document.getElementById('close-form');

  function floatingFunction(){
    floatFormSec.classList.add('active');
  }

  function closefloatingFunction(){
    floatFormSec.classList.remove('active');
  }

  floatClick.addEventListener('click', floatingFunction);
  closeForm.addEventListener('click', closefloatingFunction);
</script>

<!-- script-for-product-detail-page -->


<script>
  var swiper = new Swiper(".gallery-slider", {
      pagination: {
          el: ".swiper-pagination",
          type: "fraction",
      },
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
  });
</script>

<!-- for custome popup gallery -->
<script>
  const popGalleryClick = document.getElementById('pop-gallery-click');
  const popGalleryMain = document.getElementById('pop-gallery-main');
  const popGalleryClose = document.getElementById('close-pop-gallery');

  function showPopGallery() {
      popGalleryMain.classList.add('active');
  }

  function closePopGallery() {
      popGalleryMain.classList.remove('active');
  }
  popGalleryClick.addEventListener('click', showPopGallery);
  popGalleryClose.addEventListener('click', closePopGallery);


  // for-count-taking-from-gallery
</script>

<script>
  var swiper = new Swiper(".prod-slider", {
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
  });
</script>

<script>
  count = $('.pop-gallery-slide').children('div').length;
  $('#countnotif').text(count);
</script>
    
@endpush