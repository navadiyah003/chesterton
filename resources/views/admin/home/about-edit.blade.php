@extends('admin.layouts.navbar')

@section('content')
{{-- <div class="dashboard-wrapper"> --}}
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header" style="background:rgb(230, 83, 103)">Edit  About Us</h3>
                <div class="card-body">
                <form action="{{route('admin.home-about.update',$about->id)}}" method="POST" id="form" data-parsley-validate=""
                    novalidate="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="stories_title" class="col-3 col-lg-2 col-form-label text-right"> Title:</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" id="title" name="title" data-parsley-type="" value="{{ $about->title }}"placeholder=""
                                class="form-control">
                            @if($errors->has('title'))
                            <div class="text-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Description:</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" id="description" name="description" value="{{ $about->description }}"data-parsley-type="" placeholder=""
                                class="form-control">
                            @if($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="content" class="col-3 col-lg-2 col-form-label text-right"> Content:</label>
                        <div class="col-9 col-lg-10">
                            <textarea class="form-control" id="home_about_content" name="content" rows="3">{{ $about->content }}</textarea>
                            @if($errors->has('content'))
                            <div class="text-danger">{{ $errors->first('content') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="content" class="col-3 col-lg-2 col-form-label text-right"> About Chestertons:</label>
                        <div class="col-9 col-lg-10">
                            <textarea class="form-control" id="about_chestertons" name="about_chestertons" rows="3">{{ $about->about_chestertons }}</textarea>
                            @if($errors->has('about_chestertons'))
                            <div class="text-danger">{{ $errors->first('about_chestertons') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="link" class="col-3 col-lg-2 col-form-label text-right"> Link:</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" id="link" name="link" value="{{ $about->link }}" data-parsley-type="" placeholder=""
                                class="form-control">
                            @if($errors->has('link'))
                            <div class="text-danger">{{ $errors->first('link') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-3 col-lg-2 col-form-label text-right"> Image:</label>
                        <div class="col-9 col-lg-10">
                            <input type="file" class="form-control form-control-lg" name="image" id="image" required />
                             <img src="{{ asset('/admin/uploads/home/'.$about->image) }}" width="70px" height="70px"
                                                                alt="Image">
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