@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> Our Team List</h3>
                         <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                            <input type="search" name="our_team_search" id="our_team_search" class="form-control" value="{{ request('our_team_search')}}" placeholder="Search..."/>
                        </div>
                            
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="font-size:15px">
                                    <thead class="bg-light">
                                        <tr class="border-0 text-bold ">
                                            <th class="border-0"> # </th>
                                            <th class="border-0"> Member Name </th>
                                            <th class="border-0"> Member Position </th>
                                            <th class="border-0"> Member Description </th>
                                            <th class="border-0"> Member Image </th>
                                            <th class="border-0" width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="allData">
                                        @forelse($our_team as $key=>$team)
                                            <tr id="{{ $team->id }}" >
                                                <td>{{ $our_team->firstItem() + $key }} </td>                                              
                                                <td>{{ $team['member_name'] }}</td>
                                                <td>{{ $team['member_position'] }}</td>
                                                <td class="text-truncate" style="max-width: 150px;">{!! $team['member_desc'] !!}</td>
                                                <td>
                                                    <img src="{{ asset('/admin/uploads/our-team/member_image/'.$team->member_image) }}" width="70px" height="70px" alt="Image">
                                                </td>
                                                
                                                <td>
                                                    <a class="btn btn-primary btn-md" href="{{route('admin.edit-our-team', $team->id) }}"><i class="fas fa-edit"></i> Edit </a>
                                                    <button type="button" class="btn btn-danger btn-md" onclick="delete_our_team(this)" data-id="{{ $team->id }}" id="our_team_delete"><i class="fas fa-trash-alt"></i> Delete </button>                  
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">
                                                    <h5 class="text-center" style="border:1 px solid black;border-radius:5px;background-color:rgb(184, 226, 217);padding:15px;">
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
                                    {!! $our_team->withQueryString()->links('pagination::bootstrap-5')!!}     
                                    </span>  
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
