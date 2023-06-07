@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> About-us List</h3>
                            <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                                <input type="search" name="about_us_search" id="about_us_search" class="form-control" value="{{ request('about_us_search')}}" placeholder="Search..."/>
                            </div> 
                            
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="font-size:15px">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0"> Main Image </th>
                                                <th class="border-0"> Short Description </th>
                                                <th class="border-0"> Long Description </th>
                                                <th class="border-0"> Future Image </th>
                                                <th class="border-0"> Future Title </th>
                                                <th class="border-0"> Future Description </th>
                                                <th class="border-0"> Social Images </th>
                                                <th class="border-0"> Social Title </th>
                                                <th class="border-0"> Social Description </th>
                                                <th class="border-0" width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="allData">
                                           
                                            @forelse($about_us as $key=>$item)
                                                <tr id="{{ $item->id }}" >
                                                    <td>{{ $about_us->firstItem() + $key }}</td>                                              
                                                    <td>
                                                        <img src="{{ asset('admin/uploads/about-us/main_image/'.$item->main_image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                    </td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['short_desc'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{!! $item['long_desc'] !!}</td>
                                                    <td>
                                                        <img src="{{ asset('admin/uploads/about-us/future_image/'.$item->future_image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                    </td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['future_title'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{!! $item['future_desc'] !!}</td>
                                                    
                                                    <td class="text-truncate" style="max-width: 200px;">      
                                                        @if($item->social_images)         
                                                            @foreach(json_decode($item->social_images) as $picture)

                                                                <img src="{{ asset('/admin/uploads/about-us/social_images/'.$picture) }}" width="70px" height="70px" alt="Image">
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                     <td class="text-truncate" style="max-width: 150px;">{{ $item['social_title'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{!! $item['social_desc'] !!}</td>

                                                    <td>
                                                        <a class="btn btn-primary btn-md" href="{{route('admin.edit-about-us', $item->id) }}"><i class="fas fa-edit"></i> Edit </a>
                                                        <button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_about_us(this)" data-id="{{ $item->id }}" id="about_us_delete"><i class="fas fa-trash-alt"></i> Delete </button>
                                                                           
                                                    </td>                                                                                                 
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="11">
                                                        <h5 class="text-center" style="border:1 px solid black;border-radius: 5px;background-color:rgb(184, 226, 217);padding:15px;">
                                                            No Data Found.
                                                        </h5>        
                                                    </td>
                                                </tr>
                                            @endforelse   
                                        </tbody>
                                        <tbody class="searchData" id="content"></tbody>
                                    </table>
                                    <div class="ml-3 mt-4">
                                        <span>
                                        {!! $about_us->withQueryString()->links('pagination::bootstrap-5')!!}     
                                        </span>  
                                    </div>    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
