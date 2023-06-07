@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Edit History</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.update-history',$history->id)}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                       @method('PUT')
                                        <div class="form-group row">
                                            <label for="main_image" class="col-3 col-lg-2 col-form-label text-right"> Main Image:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="file" id="main_image" name="main_image"  data-parsley-type="" placeholder="" class="form-control form-control-lg">
                                                <img src="{{ asset('admin/uploads/history/main_image/'.$history->main_image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                @if($errors->has('main_image'))
                                                <div class="text-danger">{{ $errors->first('main_image') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="short_desc" class="col-3 col-lg-2 col-form-label text-right">Short Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="short_desc" name="short_desc"  value="{{ $history->short_desc }}" data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('short_desc'))
                                                <div class="text-danger">{{ $errors->first('short_desc') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="long_desc" class="col-3 col-lg-2 col-form-label text-right"> Long Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="history_long_desc" name="long_desc" rows="3">{{ $history->long_desc }}</textarea>
                                                @if($errors->has('long_desc'))
                                                <div class="text-danger">{{ $errors->first('long_desc') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <label for="brochure" class="col-3 col-lg-2 col-form-label text-right"> Brochure:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="file" id="brochure" name="brochure"  data-parsley-type="" placeholder="" class="form-control form-control-lg">
                                                        <i class='fas fa-file-pdf' style='font-size:30px;color:red'></i>
                                                         {{ $history->brochure }}
                                                @if($errors->has('brochure'))
                                                <div class="text-danger">{{ $errors->first('brochure') }}</div>
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