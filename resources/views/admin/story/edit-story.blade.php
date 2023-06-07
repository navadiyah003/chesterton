@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Edit Story</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.update-story',$stories->id)}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                       @method('PUT')

                                        <div class="form-group row">
                                            <label for="stories_title" class="col-3 col-lg-2 col-form-label text-right">Story Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="stories_title" name="stories_title"  data-parsley-type="" value="{{ $stories->stories_title }}" placeholder="" class="form-control">
                                                @if($errors->has('stories_title'))
                                                <div class="text-danger">{{ $errors->first('stories_title') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="stories_type" class="col-3 col-lg-2 col-form-label text-right">Story Type:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="stories_type" name="stories_type"  data-parsley-type="" value="{{ $stories->stories_type }}" placeholder="" class="form-control">
                                                @if($errors->has('stories_type'))
                                                <div class="text-danger">{{ $errors->first('stories_type') }}</div>
                                            @endif
                                            </div>                            
                                        </div>

                                        <div class="form-group row">
                                            <label for="short_description" class="col-3 col-lg-2 col-form-label text-right">Short Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="short_description" name="short_description" value="{{ $stories->short_description }}" data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('short_description'))
                                                <div class="text-danger">{{ $errors->first('short_description') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="long_description" class="col-3 col-lg-2 col-form-label text-right"> Long Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="story_long_description" name="long_description" rows="3">{{ $stories->long_description }}</textarea>
                                                @if($errors->has('long_description'))
                                                <div class="text-danger">{{ $errors->first('long_description') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">     
                                            <label for="main_image" class="col-3 col-lg-2 col-form-label text-right">Main Image:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="main_image" id="main_image" required />
                                                <img src="{{ asset('admin/uploads/story/main_image/'.$stories->main_image) }}" width="70px" height="70px" alt="Image">
                                                @if($errors->has('main_image'))
                                                    <div class="text-danger">{{ $errors->first('main_image') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">     
                                            <label for="extra_image" class="col-3 col-lg-2 col-form-label text-right">Extra Image:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="extra_image[]" id="extra_image[]" multiple />
                                                <div class="row p-2 ml-2">
                                                    @foreach(json_decode($stories->extra_image) as $key=>$picture)
                                                        <div class="mr-4 story-multi-img-delete" id="story-multi-img-delete" data-image-name="{{ $picture }}" data-image-id="{{ $stories->id }}" data-index="{{ $key }}">
                                                                <img src="{{asset('/admin/uploads/story/extra_image/'.$picture) }}" width="70px" height="70px" alt="Image">
                                                                <button type="button" class="close mr-2">&times;</button>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                @if($errors->has('extra_image'))
                                                    <div class="text-danger">{{ $errors->first('extra_image') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                            
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-lg-6 pl-0">
                                                <p class="text-center">
                                                    <button type="submit" class="btn btn-space btn-primary btn-lg">Update</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}

@endsection