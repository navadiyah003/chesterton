@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> About Us</h3>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="font-size:15px">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0"> Title </th>
                                                <th class="border-0"> Content </th>
                                                <th class="border-0"> Description</th>
                                                <th class="border-0"> About Chestertons</th>
                                                <th class="border-0"> Link </th>
                                                <th class="border-0"> Image </th>
                                                <th class="border-0" width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($about as $key=>$item)
                                                <tr id="{{ $item->id }}" >
                                                    <td>{{ $about->firstItem() + $key }}</td>                                              
                                                    <td>{{ $item['title'] }}</td>
                                                    <td>{!! $item['content'] !!}</td>
                                                    <td>{{ $item['description'] }}</td>
                                                    <td>{!! $item['about_chestertons'] !!}</td>
                                                    <td>{{ $item['link'] }}</td>
                                                    <td>
                                                        <img src="{{ asset('/admin/uploads/home/'.$item->image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-md" href="{{route('admin.home-about.edit', $item->id) }}"><i class="fas fa-edit"></i> Edit </a>
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

@endsection
