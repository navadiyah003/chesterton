@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> Story List</h3>

                           <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                                <input type="search" name="story_search" id="story_search" class="form-control" value="{{ request('story_search')}}" placeholder="Search..."/>
                            </div> 
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="font-size:15px">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0"> Story Title </th>
                                                <th class="border-0"> Story Type </th>
                                                <th class="border-0"> Short Description </th>
                                                <th class="border-0"> Long Description </th>
                                                <th class="border-0"> Main Image </th>
                                                <th class="border-0"> Extra Image </th>
                                                <th class="border-0" width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="allData">
                                            @forelse($stories as $key=>$story)
                                                <tr id="{{ $story->id }}" >
                                                    <td>{{ $stories->firstItem() + $key }}</td>                                              
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $story['stories_title'] }}</td>
                                                    <td>{{ $story['stories_type'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $story['short_description'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{!! $story['long_description'] !!}</td>
                                                    <td>
                                                        <img src="{{ asset('/admin/uploads/story/main_image/'.$story->main_image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                    </td>
                                                    <td>  
                                                        @if($story->extra_image)             
                                                            @foreach(json_decode($story->extra_image) as $picture)
                                                                <img src="{{asset('/admin/uploads/story/extra_image/'.$picture) }}" width="70px" height="70px" alt="Image">
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-md" href="{{route('admin.edit-story', $story->id) }}"><i class="fas fa-edit"></i> Edit </a>
                                                        <button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_story(this)" data-id="{{ $story->id }}" id="story_delete"><i class="fas fa-trash-alt"></i> Delete </button>
                                                                           
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
                                        <tbody class="searchData" id="content"></tbody>
                                    </table>
                                    <div class="ml-3 mt-4">
                                        <span>
                                        {!! $stories->withQueryString()->links('pagination::bootstrap-5')!!}     
                                        </span>  
                                    </div>    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
