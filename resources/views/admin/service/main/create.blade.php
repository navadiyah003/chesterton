@extends('admin.layouts.navbar')

@section('content')

<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header" style="background:rgb(230, 83, 103)">Create Service Main</h3>
                <div class="card-body">
                    <form method="post" action="{{route('admin.store-mainservice') }}" id="form"
                        data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="form-group row">
                            <label for="stories_title" class="col-3 col-lg-2 col-form-label text-right"> Title:</label>
                            <div class="col-9 col-lg-10">
                                <input type="text" id="title" name="title" data-parsley-type="" placeholder="" value=""
                                    class="form-control">
                                @if($errors->has('title'))
                                <div class="text-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="link" class="col-3 col-lg-2 col-form-label text-right"> Description:</label>
                            <div class="col-9 col-lg-10">
                                <input type="text" id="description" name="description" data-parsley-type="" placeholder="" value=""
                                    class="form-control">
                                @if($errors->has('description'))
                                <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-3 col-lg-2 col-form-label text-right"> Content:</label>
                            <div class="col-9 col-lg-10">
                                <textarea class="form-control" id="service_main_content" name="content" rows="3"></textarea>
                                @if($errors->has('content'))
                                <div class="text-danger">{{ $errors->first('content') }}</div>
                            @endif
                            </div>
                        </div>                      

                        <div class="form-group row">
                            <label for="main_image" class="col-3 col-lg-2 col-form-label text-right"> Main Image:</label>
                            <div class="col-9 col-lg-10">
                                <input type="file" class="form-control form-control-lg" name="main_image" id="image"
                                    required />
                                   
                                @if($errors->has('main_image'))
                                <div class="text-danger">{{ $errors->first('main_image') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-3 col-lg-2 col-form-label text-right"> Image:</label>
                            <div class="col-9 col-lg-10">
                                <input type="file" class="form-control form-control-lg" name="image" id="image"
                                    required />
                                

                                @if($errors->has('image'))
                                <div class="text-danger">{{ $errors->first('image') }}</div>
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