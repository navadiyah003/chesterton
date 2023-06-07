@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Add About-us</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.add-about-us')}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                        <div class="form-group row">
                                            <label for="main_image" class="col-3 col-lg-2 col-form-label text-right"> Main Image:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="file" id="main_image" name="main_image"  data-parsley-type="" placeholder="" class="form-control form-control-lg">
                                                @if($errors->has('main_image'))
                                                <div class="text-danger">{{ $errors->first('main_image') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="short_desc" class="col-3 col-lg-2 col-form-label text-right">Short Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="short_desc" name="short_desc"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('short_desc'))
                                                <div class="text-danger">{{ $errors->first('short_desc') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="long_desc" class="col-3 col-lg-2 col-form-label text-right"> Long Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="about_long_desc" name="long_desc" rows="3"></textarea>
                                                @if($errors->has('long_desc'))
                                                <div class="text-danger">{{ $errors->first('long_desc') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <label for="future_image" class="col-3 col-lg-2 col-form-label text-right"> Future Image:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="file" id="future_image" name="future_image"  data-parsley-type="" placeholder="" class="form-control form-control-lg">
                                                @if($errors->has('future_image'))
                                                <div class="text-danger">{{ $errors->first('future_image') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="future_title" class="col-3 col-lg-2 col-form-label text-right">Future Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="future_title" name="future_title"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('future_title'))
                                                <div class="text-danger">{{ $errors->first('future_title') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="future_desc" class="col-3 col-lg-2 col-form-label text-right">Future Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="future_desc" name="future_desc" rows="3"></textarea>
                                                @if($errors->has('future_desc'))
                                                <div class="text-danger">{{ $errors->first('future_desc') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">     
                                            <label for="social_images" class="col-3 col-lg-2 col-form-label text-right">Social Images:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="social_images[]" id="social_images[]" multiple />
                                            
                                                 @if($errors->hasAny(['social_images','social_images.*']))
                                                    <div class="text-danger">{{ $errors->first('social_images') ?: $errors->first('social_images.*') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="social_title" class="col-3 col-lg-2 col-form-label text-right">Social Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="social_title" name="social_title"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('social_title'))
                                                <div class="text-danger">{{ $errors->first('social_title') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="social_desc" class="col-3 col-lg-2 col-form-label text-right">Social Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="social_desc" name="social_desc" rows="3"></textarea>
                                                @if($errors->has('social_desc'))
                                                <div class="text-danger">{{ $errors->first('social_desc') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        
                                            
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-lg-6 pl-0">
                                                <p class="text-center">
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