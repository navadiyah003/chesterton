@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> Global Network List</h3>
                            <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                                <input type="search" name="glob_net_search" id="glob_net_search" class="form-control" value="{{ request('glob_net_search')}}" placeholder="Search..."/>
                            </div> 
                            
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="font-size:15px">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0"> Banner Image </th>
                                                <th class="border-0"> Banner Title </th>
                                                <th class="border-0"> Short Description </th>
                                                <th class="border-0"> Long Description </th>
                                                <th class="border-0"> Web Link Content </th>
                                                <th class="border-0"> Web Link </th>
                                                <th class="border-0"> Office Address </th>
                                                <th class="border-0"> Popular city content </th>
                                                <th class="border-0"> Popular city Image </th>
                                                <th class="border-0"> Image Slide </th>
                                                <th class="border-0" width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="allData">
                                           
                                            @forelse($global_network as $key=>$glob_net)
                                                <tr id="{{ $glob_net->id }}" >
                                                    <td>{{ $global_network->firstItem() + $key }}</td>                                              
                                                    <td>
                                                        <img src="{{ asset('admin/uploads/global-network/banner_image/'.$glob_net->banner_image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                    </td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $glob_net['banner_title'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $glob_net['short_desc'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{!! $glob_net['long_desc'] !!}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $glob_net['web_link_content'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $glob_net['web_link'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{!! $glob_net['office_address'] !!}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $glob_net['popular_city_content'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">
                                                        <img src="{{ asset('admin/uploads/global-network/popular_city_image/'.$glob_net->popular_city_image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                    </td>
                                                    <td class="text-truncate" style="max-width: 200px;">   
                                                         @if($glob_net->image_slide)              
                                                            @foreach(json_decode($glob_net->image_slide) as $picture)
                                                                <img src="{{ asset('admin/uploads/global-network/image_slide/'.$picture) }}" width="70px" height="70px" alt="Image">
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-md mb-1" href="{{route('admin.edit-global-network', $glob_net->id) }}"><i class="fas fa-edit"></i> Edit </a>
                                                        <button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_global_network(this)" data-id="{{ $glob_net->id }}" id="global_network_delete"><i class="fas fa-trash-alt"></i> Delete </button>
                                                                           
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
                                        {!! $global_network->withQueryString()->links('pagination::bootstrap-5')!!}     
                                        </span>  
                                    </div>    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
