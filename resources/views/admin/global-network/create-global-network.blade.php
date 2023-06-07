@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Add Global Network</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.add-global-network')}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                        <div class="form-group row">
                                            <label for="banner_image" class="col-3 col-lg-2 col-form-label text-right"> Banner Image:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="file" id="banner_image" name="banner_image"  data-parsley-type="" placeholder="" class="form-control form-control-lg">
                                                @if($errors->has('banner_image'))
                                                <div class="text-danger">{{ $errors->first('banner_image') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="banner_title" class="col-3 col-lg-2 col-form-label text-right"> Banner Title:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="banner_title" name="banner_title"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('banner_title'))
                                                <div class="text-danger">{{ $errors->first('banner_title') }}</div>
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
                                                <textarea class="form-control" id="global_long_desc" name="long_desc" rows="3"></textarea>
                                                @if($errors->has('long_desc'))
                                                <div class="text-danger">{{ $errors->first('long_desc') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">     
                                            <label for="web_link_content" class="col-3 col-lg-2 col-form-label text-right">Web Link Content:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="text" class="form-control" name="web_link_content" id="web_link_content" required />
                                           
                                                @if($errors->has('web_link_content'))
                                                    <div class="text-danger">{{ $errors->first('web_link_content') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">     
                                            <label for="web_link" class="col-3 col-lg-2 col-form-label text-right">Web Link:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="text" class="form-control" name="web_link" id="web_link" required />
                                           
                                                @if($errors->has('web_link'))
                                                    <div class="text-danger">{{ $errors->first('web_link') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="office_address" class="col-3 col-lg-2 col-form-label text-right"> Office Address:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="global_office_address" name="office_address" rows="3"></textarea>
                                                @if($errors->has('office_address'))
                                                <div class="text-danger">{{ $errors->first('office_address') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="office_phone" class="col-3 col-lg-2 col-form-label text-right"> Phone No:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="number" class="form-control" name="office_phone" id="office_phone" required />
                                                @if($errors->has('office_phone'))
                                                <div class="text-danger">{{ $errors->first('office_phone') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="office_email" class="col-3 col-lg-2 col-form-label text-right"> Email:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="email" class="form-control" name="office_email" id="office_email" required />
                                                @if($errors->has('office_email'))
                                                <div class="text-danger">{{ $errors->first('office_email') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="popular_city_content" class="col-3 col-lg-2 col-form-label text-right">Popular City Content:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="popular_city_content" name="popular_city_content"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('popular_city_content'))
                                                <div class="text-danger">{{ $errors->first('popular_city_content') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="popular_city_image" class="col-3 col-lg-2 col-form-label text-right"> Popular City Image:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="file" id="popular_city_image" name="popular_city_image"  data-parsley-type="" placeholder="" class="form-control form-control-lg">
                                                @if($errors->has('popular_city_image'))
                                                <div class="text-danger">{{ $errors->first('popular_city_image') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">     
                                            <label for="image_slide" class="col-3 col-lg-2 col-form-label text-right">Image Slide:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="image_slide[]" id="image_slide[]" multiple />
                                                
                                                 @if($errors->hasAny(['image_slide','image_slide.*']))
                                                    <div class="text-danger">{{ $errors->first('image_slide') ?: $errors->first('image_slide.*') }}</div>
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