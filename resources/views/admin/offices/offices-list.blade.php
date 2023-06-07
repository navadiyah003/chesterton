@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> Offices List</h3>
                            <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                                <input type="search" name="offices_search" id="offices_search" class="form-control" value="{{ request('offices_search')}}" placeholder="Search..."/>
                            </div> 
                            
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="font-size:15px">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0"> Title </th>
                                                <th class="border-0"> Main Image </th>
                                                <th class="border-0"> Office Address </th>
                                                <th class="border-0"> Office Email </th>
                                                <th class="border-0"> Facebook </th>
                                                <th class="border-0"> Linked In </th>
                                                <th class="border-0"> Instagram </th>
                                                <th class="border-0" width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="allData">
                                           
                                            @forelse($offices as $key=>$item)
                                                <tr id="{{ $item->id }}" >
                                                    <td>{{ $offices->firstItem() + $key }}</td>         
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['title'] }}</td>  
                                                    <td>
                                                        <img src="{{ asset('admin/uploads/offices/main_image/'.$item->main_image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                    </td>                                   
                                                    <td class="text-truncate" style="max-width: 150px;">{!! $item['office_address'] !!}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['office_email'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['facebook'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['linkedin'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['instagram'] }}</td>
                                                   
                                                    <td>
                                                        <a class="btn btn-primary btn-md" href="{{route('admin.edit-offices', $item->id) }}"><i class="fas fa-edit"></i> Edit </a>
                                                        <button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_offices(this)" data-id="{{ $item->id }}" id="offices_delete"><i class="fas fa-trash-alt"></i> Delete </button>
                                                                           
                                                    </td>                                                                                                 
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9">
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
                                        {!! $offices->withQueryString()->links('pagination::bootstrap-5')!!}     
                                        </span>  
                                    </div>    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
