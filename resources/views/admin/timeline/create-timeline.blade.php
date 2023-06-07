@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Add Timeline</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.add-timeline')}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 

                                       <div class="form-group row">
                                            <label for="year" class="col-3 col-lg-2 col-form-label text-right">Year:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="year" name="year"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('year'))
                                                <div class="text-danger">{{ $errors->first('year') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="timeline_image" class="col-3 col-lg-2 col-form-label text-right"> Timeline Image:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="file" id="timeline_image" name="timeline_image"  data-parsley-type="" placeholder="" class="form-control form-control-lg">
                                                @if($errors->has('timeline_image'))
                                                <div class="text-danger">{{ $errors->first('timeline_image') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="timeline_title" class="col-3 col-lg-2 col-form-label text-right">Timeline Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="timeline_title" name="timeline_title"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('timeline_title'))
                                                <div class="text-danger">{{ $errors->first('timeline_title') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="timeline_desc" class="col-3 col-lg-2 col-form-label text-right"> Timeline Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="timeline_desc" name="timeline_desc" rows="3"></textarea>
                                                @if($errors->has('timeline_desc'))
                                                <div class="text-danger">{{ $errors->first('timeline_desc') }}</div>
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