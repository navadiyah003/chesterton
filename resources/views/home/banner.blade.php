<section class="banner home-banner">
@foreach ($slide as $slides)
    <video playsinline="playsinline" muted="muted" preload="yes" autoplay="autoplay" loop="loop"
        data-setup='{"autoplay":"any"}'>
        <source src="{{ asset('/admin/uploads/videos/'. $slides->path) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
@endforeach
    <div class="overlay">

        <div class="home-search-section">


            <div class="search-box-tags">
                <form action="{{ url('property-listing') }}" method="get">
                    <ul id="propertyList" class="border-anim-2">
                        <li value="residential" class="active" id="res">Residential</li>
                        <li value="commercial" id="comm">Commercial</li>
                        <li value="services" id="ser">Services</li>
                    </ul>
                    <div class="search-field">
                        <div class="serach-field-wrap">
                                <input type="text" name="location" placeholder="Find your location">
                                <input type="submit">
                        </div>

                    </div>
                    <input type="hidden" name="propertyType" id="propertyType" value="residential">
                </form>

            </div>
        </div>


    </div>

    <span class="scroll-down"><img src="{{ asset('./images/scroll-down.svg') }}" alt=""></span>
</section>

@push('scripts')
    <script>
        $('#res').on('click', function(e) {
            $('#res').addClass('active');
            $('#comm').removeClass('active');
            $('#ser').removeClass('active');
        });
        $('#comm').on('click', function(e) {
            $('#comm').addClass('active');
            $('#ser').removeClass('active');
            $('#res').removeClass('active');
        });
        $('#ser').on('click', function(e) {
            $('#ser').addClass('active');
            $('#res').removeClass('active');
            $('#comm').removeClass('active');
        });
        var propertyList = document.getElementById("propertyList");
        var hiddenInput = document.getElementById("propertyType");
        propertyList.addEventListener("click", function(event) {
            var selectedOption = event.target.getAttribute("value");
            hiddenInput.value = selectedOption;
        });
    </script>
@endpush