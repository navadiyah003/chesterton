@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> History List</h3>
                            <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                                <input type="search" name="history_search" id="history_search" class="form-control" value="{{ request('history_search')}}" placeholder="Search..."/>
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
                                                <th class="border-0"> Brochure </th>
                                                <th class="border-0" width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="allData">
                                           
                                            @forelse($history as $key=>$item)
                                                <tr id="{{ $item->id }}" >
                                                    <td>{{ $history->firstItem() + $key }}</td>                                              
                                                    <td>
                                                        <img src="{{ asset('admin/uploads/history/main_image/'.$item->main_image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                    </td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['short_desc'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{!! $item['long_desc'] !!}</td>
                                                    <td>
                                                        <i class='fas fa-file-pdf' style='font-size:30px;color:red'></i><a href="{{ asset('admin/uploads/history/brochure/'.$item->brochure) }}" target="_blank"> {{ $item->brochure }}</a>
                                                    </td>
                                                    
                                                    <td>
                                                        <a class="btn btn-primary btn-md" href="{{route('admin.edit-history', $item->id) }}"><i class="fas fa-edit"></i> Edit </a>
                                                        <button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_history(this)" data-id="{{ $item->id }}" id="history_delete"><i class="fas fa-trash-alt"></i> Delete </button>
                                                                           
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
                                        {!! $history->withQueryString()->links('pagination::bootstrap-5')!!}     
                                        </span>  
                                    </div>    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
