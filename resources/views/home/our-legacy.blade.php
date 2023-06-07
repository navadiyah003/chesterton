<section class="hm-our-legacy-section section-space-top ">

    <div class="container-fluid">

        <div class="row legacy-row">
            <div class="col-sm-7 legacy-thumb-left">
                {{-- <img src="{{ asset('./images/our-legacy-thumb.jpg') }}" > --}}
                <img src="{{asset('/admin/uploads/home/'.$about->image) }}" alt=""> 

                <h5>{{ $about->description }}</h5>
            </div>
            <div class="col-sm-5 legacy-right">
                <div class="discriptions">

                    <span class="small-title">about us</span>
                    <h2>{{$about->title}}</h2>
                    <span class="devider"></span>
                    <p>{{$about->content}}</p>
                    <a href="{{$about->link}}" class="button-1 arrow">learn more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container hm-office-details  section-space-top section-space-bottom">

        <ul class="row hm-off-detal-row">
            <li class="col hm-off-col">
                <h2>46</h2>
                <span>Offices</span>
            </li>
            <li class="col hm-off-col">
                <h2>200</h2>
                <span>Years in Business</span>
            </li>
            <li class="col hm-off-col">
                <h2>16</h2>
                <span>Countries</span>
            </li>
            <li class="col hm-off-col">
                <h2>800</h2>
                <span>Team Members</span>
            </li>
        </ul>

    </div>


</section>
