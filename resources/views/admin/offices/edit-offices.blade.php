@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Edit Offices</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.update-offices',$offices->id)}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                       @method('PUT')

                                       <div class="form-group row">
                                            <label for="title" class="col-3 col-lg-2 col-form-label text-right"> Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="title" name="title" value="{{ $offices->title }}"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('title'))
                                                <div class="text-danger">{{ $errors->first('title') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="main_image" class="col-3 col-lg-2 col-form-label text-right"> Main Image:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="file" id="main_image" name="main_image"  data-parsley-type="" placeholder="" class="form-control form-control-lg">
                                                <img src="{{ asset('admin/uploads/offices/main_image/'.$offices->main_image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                @if($errors->has('main_image'))
                                                <div class="text-danger">{{ $errors->first('main_image') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                       <div class="form-group row">
                                            <label for="office_address" class="col-3 col-lg-2 col-form-label text-right"> Office Address:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="office_address" name="office_address" rows="3">{{ $offices->office_address }}</textarea>
                                                @if($errors->has('office_address'))
                                                <div class="text-danger">{{ $errors->first('office_address') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="office_email" class="col-3 col-lg-2 col-form-label text-right"> Office Email:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="office_email" name="office_email" value="{{ $offices->office_email }}" data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('office_email'))
                                                <div class="text-danger">{{ $errors->first('office_email') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="facebook" class="col-3 col-lg-2 col-form-label text-right">Facebook:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="facebook" name="facebook"  value="{{ $offices->facebook }}" data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('facebook'))
                                                <div class="text-danger">{{ $errors->first('facebook') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="linkedin" class="col-3 col-lg-2 col-form-label text-right">Linked In:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="linkedin" name="linkedin"  value="{{ $offices->linkedin }}" data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('linkedin'))
                                                <div class="text-danger">{{ $errors->first('linkedin') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="instagram" class="col-3 col-lg-2 col-form-label text-right">Instagram:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="instagram" name="instagram" value="{{ $offices->instagram }}"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('instagram'))
                                                <div class="text-danger">{{ $errors->first('instagram') }}</div>
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