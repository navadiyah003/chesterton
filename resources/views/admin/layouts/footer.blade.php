<!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright ©
                              {{-- 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>. --}}
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                {{-- <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('admin/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('admin/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('admin/assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('admin/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('admin/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{ asset('admin/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('admin/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/js/dashboard-ecommerce.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- script for auto suggestion search --}}
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    {{-- script for text-editor in textarea --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

  {{--  Scripts for summernote text editor --}}
    <script type="text/javascript">
     $(document).ready(function(){
            // story
            $('#story_long_description').summernote({
                height: 200
            });

            //user 
            $('#user_address').summernote({
                height: 200
            });

            //global network
            $('#global_long_desc').summernote({
                height: 200
            });

            $('#global_office_address').summernote({
                height: 200
            });

            //global integrated service
            $('#global_network_integrate_description').summernote({
                height: 200
            });

            //integrated service
            $('#inte_description').summernote({
                height: 200
            });

            //About us
            $('#about_long_desc').summernote({
                height: 200
            });
            $('#future_desc').summernote({
                height: 200
            });
            $('#social_desc').summernote({
                height: 200
            });

            //Our Team
            $('#member_desc').summernote({
                height: 200
            });

            //History
            $('#history_long_desc').summernote({
                height: 200
            });

            //Timeline
             $('#timeline_desc').summernote({
                height: 200
            });

            //Offices
            $('#office_address').summernote({
                height: 200
            });

            //Home -about 
            $('#home_about_content').summernote({
                height: 200
            });
            $('#about_chestertons').summernote({
                height: 200
            });

            //service -main
            $('#service_main_content').summernote({
                height: 200
            });

            //consultants
            $('#consultant_content').summernote({
                height: 200
            });
        });
    </script>
    
     {{-- Script for delete multi image with confirmation  --}}
    <script type="text/javascript">

        // Delete single imag from multiple images - About Us
        $('.about-multi-img-delete').on('click', '.close', function() {
            var wrapper = $(this).closest('.about-multi-img-delete');
            //console.log(wrapper);
            var imageName = wrapper.data('image-name');
            var index = wrapper.data('index');
             var imageId = wrapper.data('image-id');
            // console.log(imageName,imageId);
            // var url = url('/delete-mltiimg/' + imageId);
            //console.log(imageId);
             swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                        url: '{{ url("/admin/delete-mltiimg-about")}}/' +imageId +'/'+index,
                        method: 'POST',
                        data:{
                                id : imageId,
                                name : imageName,
                                "_token" : "{{csrf_token()}}",  
                            },
                        success: function() {
                            wrapper.remove();
                        }
                    });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        });

        $('.about-multi-img-delete-career').on('click', '.close', function() {
            var wrapper = $(this).closest('.about-multi-img-delete-career');
            //console.log(wrapper);
            var imageName = wrapper.data('image-name');
            var index = wrapper.data('index');
             var imageId = wrapper.data('image-id');
            // console.log(imageName,imageId);
            // var url = url('/delete-mltiimg/' + imageId);
            //console.log(imageId);
             swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                        url: '{{ url("/admin/delete-career-image")}}/' +imageId +'/'+index,
                        method: 'POST',
                        data:{
                                id : imageId,
                                name : imageName,
                                "_token" : "{{csrf_token()}}",  
                            },
                        success: function() {
                            wrapper.remove();
                        }
                    });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        });

         // Delete single imag from multiple images - Global Network
        $('.global-multi-img-delete').on('click', '.close', function() {
            var wrapper = $(this).closest('.global-multi-img-delete');
            //console.log(wrapper);
            var imageName = wrapper.data('image-name');
            var index = wrapper.data('index');
             var imageId = wrapper.data('image-id');
           
             swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                        url: '{{ url("/admin/delete-mltiimg-gbl")}}/' +imageId +'/'+index,
                        method: 'POST',
                        data:{
                                id : imageId,
                                name : imageName,
                                "_token" : "{{csrf_token()}}",  
                            },
                        success: function() {
                            wrapper.remove();
                        }
                    });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            
        });

          // Delete single imag from multiple images - Story
        $('.story-multi-img-delete').on('click', '.close', function() {
            var wrapper = $(this).closest('.story-multi-img-delete');
            //console.log(wrapper);
            var imageName = wrapper.data('image-name');
            var index = wrapper.data('index');
            var imageId = wrapper.data('image-id');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                        url: '{{ url("/admin/delete-mltiimg-story")}}/' +imageId +'/'+index,
                        method: 'POST',
                        data:{
                                id : imageId,
                                name : imageName,
                                "_token" : "{{csrf_token()}}",  
                            },
                        success: function() {
                            wrapper.remove();
                        }
                    });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        });
    </script>

        <script type="text/javascript">

            // User Search 
            $('#user_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];
                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.user-list') }}',
                        data: { 'user_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                });
                function startAutoComplete(availableTags) {
                   $( "#user_search" ).autocomplete({
                        source: availableTags
                   });
                }
            });

            $('#applicant_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];
                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.applicant') }}',
                        data: { 'applicant_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                });
                function startAutoComplete(availableTags) {
                   $( "#applicant_search" ).autocomplete({
                        source: availableTags
                   });
                }
            });

            // Story Search 
             
            $('#story_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];
                //console.log(availableTags);
                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.story-list') }}',
                        dataType:'json',
                        data: { 'story_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                 });
                function startAutoComplete(availableTags) {
                   $( "#story_search" ).autocomplete({
                        source: availableTags
                   });
                }
            });

            // Global Network Search 
            $('#glob_net_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];

                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.global-network-list') }}',
                        data: { 'glob_net_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                 });
                    function startAutoComplete(availableTags) {
                    $( "#glob_net_search" ).autocomplete({
                            source: availableTags
                    });
                    }
            });

            // Global Integrated service Search 
            $('#global_int_service_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];

                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.global-integrated-service-list') }}',
                        data: { 'global_int_service_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                    $( "#global_int_service_search" ).autocomplete({
                            source: availableTags
                    });
                    }
            });

            // Integrated service Search 
            $('#int_service_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];

                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.integrated-service-list') }}',
                        data: { 'int_service_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#int_service_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });
            
            //About-us Search 
            $('#about_us_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];
                
                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.about-us-list') }}',
                        data: { 'about_us_search' : value },
                        success:function (response) {
                             startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#about_us_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });

            // Our Team Search 
            $('#our_team_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];
                
                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.our-team-list') }}',
                        data: { 'our_team_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#our_team_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });

            // History Search 
            $('#history_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];

                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.history-list') }}',
                        data: { 'history_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#history_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });

            // Timeline Search 
            $('#timeline_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];

                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.timeline-list') }}',
                        data: { 'timeline_search' : value },
                        success:function (response) {
                           startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#timeline_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });
            
            // Offices Search 
            $('#offices_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];

                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.offices-list') }}',
                        data: { 'offices_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#offices_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });

             // Contact us Search 
            $('#contact_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];

                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ route('admin.contact-us-list') }}',
                        data: { 'contact_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#contact_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });

              // Service-offer Search 
            $('#offer_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];
                
                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ url('admin/service-main') }}',
                        data: { 'offer_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#offer_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });

             // Service- Valuation Search 
            $('#valuation_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];

                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ url('admin/service-valution') }}',
                        data: { 'valuation_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#valuation_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });

            // Service - Insights Search 
            $('#insight_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];
                
                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ url('admin/service-insight') }}',
                        data: { 'insight_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#insight_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });

             // Service - Explore Search 
            $('#explore_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];
                
                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ url('admin/service-explore') }}',
                        data: { 'explore_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#explore_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });

             // Service - Consultants Search 
            $('#consultants_search').on('keyup',function() {
                var value = $(this).val();
                var availableTags = [];

                if(value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else{
                    $('.allData').show();
                    $('.searchData').hide();
                }
                 $.ajax({
                        type:'GET',
                        url: '{{ url('admin/service-consultants') }}',
                        data: { 'consultants_search' : value },
                        success:function (response) {
                            startAutoComplete(response.data);
                            $('#content').html(response.output);
                        }
                    });
                    function startAutoComplete(availableTags) {
                        $( "#consultants_search" ).autocomplete({
                                source: availableTags
                        });
                    }
            });
        </script>

        <script type="text/javascript">

         //Delete user
            function delete_user(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-user')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); //remove the tr without refreshing
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }
            function delete_applicant(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-applicant')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); //remove the tr without refreshing
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }
            //Delete story
            function delete_story(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-story')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); //remove the tr without refreshing
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }

            //Delete global-network
            function delete_global_network(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-global-network')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); //remove the tr without refreshing
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }

            //Delete global integrated-service
            function delete_global_integrated_service(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-global-integrated-service')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); //remove the tr without refreshing
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }

            //Delete integrated-service
            function delete_integrated_service(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-integrated-service')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); //remove the tr without refreshing
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }

             //Delete about-us
            function delete_about_us(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-about-us')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); //remove the tr without refreshing
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }

            //Delete our-team
            function delete_our_team(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-our-team')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); //remove the tr without refreshing
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }

            //Delete History
            function delete_history(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-history')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); //remove the tr without refreshing
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }

            //Delete Timeline
            function delete_timeline(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-timeline')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); 
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }

             //Delete Offices
            function delete_offices(e) {
                let id = e.getAttribute('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type:'POST',
                            url: "{{ url('/admin/delete-offices')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                $("#"+id+"").remove(); 
                            }
                        });

                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }
        </script>
        <script>
             $(function() {
                $('.toggle-class').change(function() {
                    var status = $(this).prop('checked') == true ? 1 : 0;
                    var property_id = $(this).data('id');

                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: '{{ route('admin.property.status') }}',
                        data: {
                            'status': status,
                            'property_id': property_id
                        },
                        success: function(data) {
                            console.log(data.success)
                        }
                    });
                })
            })
        </script>

        <script>
            $(function() {
            $('.country-check').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var megaMenu_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('admin.megaMenu.status') }}',
                    data: {
                        'status': status,
                        'megaMenu_id': megaMenu_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
        </script>

</body>
 
</html>