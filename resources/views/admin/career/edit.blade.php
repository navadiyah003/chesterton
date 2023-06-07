@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Edit User</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.update-career-details',$detail->id)}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                       @method('PUT')
                                        <div class="form-group row">
                                            <label for="title" class="col-3 col-lg-2 col-form-label text-right">Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="title" name="title"  data-parsley-type="" value="{{ $detail->title }}" placeholder="" class="form-control">
                                                @if($errors->has('title'))
                                                <div class="text-danger">{{ $errors->first('title') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">     
                                            <label for="bg_image" class="col-3 col-lg-2 col-form-label text-right">BG Image:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="bg_image" id="bg_image" required />
                                                <img src="{{ asset('/admin/uploads/career/'.$detail->bg_image) }}" width="70px" height="70px"
                                                                alt="bg_image">
                                                @if($errors->has('bg_image'))
                                                    <div class="text-danger">{{ $errors->first('bg_image') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">     
                                            <label for="bg_image_mobile" class="col-3 col-lg-2 col-form-label text-right">BG Image Mobile:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="bg_image_mobile" id="bg_image_mobile" required />
                                                <img src="{{ asset('/admin/uploads/career/'.$detail->bg_image_mobile) }}" width="70px" height="70px"
                                                                alt="bg_image_mobile">
                                                @if($errors->has('bg_image_mobile'))
                                                    <div class="text-danger">{{ $errors->first('bg_image_mobile') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sub_title" class="col-3 col-lg-2 col-form-label text-right">Sub Title:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="sub_title" name="sub_title"  data-parsley-type=""  value="{{ $detail->sub_title }}" placeholder="" class="form-control">
                                                @if($errors->has('sub_title'))
                                                <div class="text-danger">{{ $errors->first('sub_title') }}</div>
                                            @endif
                                            </div>                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="sub_description" class="col-3 col-lg-2 col-form-label text-right">Sub Description:</label>
                                            <div class="col-9 col-lg-10">     
                                                <textarea class="form-control" id="sub_description" name="sub_description" rows="3">{{ $detail->sub_description }}</textarea>
                                                @if($errors->has('sub_description'))
                                                <div class="text-danger">{{ $errors->first('sub_description') }}</div>
                                            @endif
                                            </div>                            
                                        </div>

                                        <div class="form-group row">     
                                            <label for="images" class="col-3 col-lg-2 col-form-label text-right">Social Images:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="images[]" id="images[]" multiple />
                                                <div class="row p-2 ml-2">
                                                    @if($detail->images !== '')
                                                    @foreach(json_decode($detail->images) as $key=>$picture)
                                                        <div class="mr-4 about-multi-img-delete-career" id="about-multi-img-delete-career" data-image-name="{{ $picture }}" data-image-id="{{ $detail->id }}" data-index="{{ $key }}">
                                                                <img src="{{ asset('/admin/uploads/career/'.$picture) }}" width="70px" height="70px" alt="Image">
                                                                <button type="button" class="close mr-2">&times;</button>
                                                        </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                                @if($errors->hasAny(['images','images.*']))
                                                    <div class="text-danger">{{ $errors->first('images') ?: $errors->first('images.*') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="opp_title" class="col-3 col-lg-2 col-form-label text-right">Opp Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="opp_title" name="opp_title"  data-parsley-type="" value="{{ $detail->opp_title }}" placeholder="" class="form-control">
                                                @if($errors->has('opp_title'))
                                                <div class="text-danger">{{ $errors->first('opp_title') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="opp_description" class="col-3 col-lg-2 col-form-label text-right">Opp Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="opp_description" name="opp_description" rows="3">{{ $detail->opp_description }}</textarea>
                                                @if($errors->has('opp_description'))
                                                <div class="text-danger">{{ $errors->first('opp_description') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="contact_title" class="col-3 col-lg-2 col-form-label text-right">Contact Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="contact_title" name="contact_title"  data-parsley-type="" value="{{ $detail->contact_title }}" placeholder="" class="form-control">
                                                @if($errors->has('contact_title'))
                                                <div class="text-danger">{{ $errors->first('contact_title') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        
                                            
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-lg-6 pl-0">
                                                <p class="text-center">
                                                    <a href="{{ url('/admin/career-details') }}" class="btn btn-space btn-default btn-lg">Cancel</a>
                                                    <button type="submit" class="btn btn-space btn-primary btn-lg">Submit</button>
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