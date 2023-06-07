@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)">Global Network Integrated Service List</h3>
                         <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                            <input type="search" name="global_int_service_search" id="global_int_service_search" class="form-control" value="{{ request('global_int_service_search')}}" placeholder="Search..."/>
                        </div>
                            
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="font-size:15px">
                                    <thead class="bg-light">
                                        <tr class="border-0 text-bold text-center">
                                            <th class="border-0">#</th>
                                            <th class="border-0"> Country Name </th>
                                            <th class="border-0"> Title </th>
                                            <th class="border-0"> Description </th>
                                            <th class="border-0"> Image </th>
                                            <th class="border-0" width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="allData">
                                        @forelse($global_integrated_service as $key=>$inte_service)
                                            <tr id="{{ $inte_service->id }}" >
                                                <td class="text-center" style="width: 100px;">{{$global_integrated_service->firstItem() + $key }}</td>
                                                <td class="text-truncate" style="max-width: 150px;">{{ $inte_service['global_network_country'] }}</td>
                                                <td class="text-truncate" style="max-width: 150px;">{{ $inte_service['global_network_integrate_title'] }}</td>
                                                <td class="text-truncate" style="max-width: 150px;">{!! $inte_service['global_network_integrate_description'] !!}</td>
                                                <td style="width: 100px;">
                                                    <img src="{{ asset('/admin/uploads/global-network-integrate/image/'.$inte_service->global_network_integrate_image) }}" width="70px" height="70px" alt="Image">
                                                </td>
                                                
                                                <td>
                                                    <a class="btn btn-primary btn-md" href="{{route('admin.edit-global-integrated-service', $inte_service->id) }}"><i class="fas fa-edit"></i> Edit </a>
                                                    <button type="button" class="btn btn-danger btn-md" onclick="delete_global_integrated_service(this)" data-id="{{ $inte_service->id }}" id="global_integrated_service_delete"><i class="fas fa-trash-alt"></i> Delete </button>                  
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">
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
                                    {!! $global_integrated_service->withQueryString()->links('pagination::bootstrap-5')!!}     
                                    </span>  
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
