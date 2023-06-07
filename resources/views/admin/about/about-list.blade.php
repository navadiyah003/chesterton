@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> AboutUs List</h3>

                            
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="font-size:15px">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0"> Title </th>
                                                <th class="border-0"> Content </th>
                                                <th class="border-0"> Description</th>
                                                <th class="border-0"> Link </th>
                                                <th class="border-0"> Image </th>
                                                <th class="border-0" width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($about as $key=>$story)
                                                <tr id="{{ $story->id }}" >
                                                    <td>{{ $about->firstItem() + $key }}</td>                                              
                                                    <td>{{ $story['title'] }}</td>
                                                    <td>{{ $story['content'] }}</td>
                                                    <td>{{ $story['description'] }}</td>
                                                    <td>{{ $story['link'] }}</td>
                                                    <td>
                                                        <img src="{{ asset('/admin/uploads/about-us/'.$story->image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-md" href="{{route('admin.about-us.edit', $story->id) }}"><i class="fas fa-edit"></i> Edit </a>
                                                        <button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_about(this)" data-id="{{ $story->id }}" id="story_delete"><i class="fas fa-trash-alt"></i> Delete </button>
                                                    </td>                                                                                                 
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="8">
                                                        <h5 class="text-center" style="border:1 px solid black;border-radius: 5px;background-color:rgb(184, 226, 217);padding:15px;">
                                                            No Data Found.
                                                        </h5>        
                                                    </td>
                                                </tr>
                                            @endforelse   
                                        </tbody>
                                    </table>
                                    <div class="ml-3 mt-4">
                                        <span>
                                        {!! $about->withQueryString()->links('pagination::bootstrap-5')!!}     
                                        </span>  
                                    </div>    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script type="text/javascript">
            function delete_about(e) {
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
                            url: "{{ url('/admin/delete-about')}}/"+id,
                            data:{
                                id : id,
                                "_token" : "{{csrf_token()}}",  
                            },
                            success:function (response) {
                                swal(" Your About  has been deleted!", {
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

@endsection
