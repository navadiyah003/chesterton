@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Add Service Explore</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.service-explore.store')}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf
                                       <div class="form-group row">
                                        <label for="stories_title" class="col-3 col-lg-2 col-form-label text-right"> Service:</label>
                                        <div class="col-9 col-lg-10">
                                            <select class="form-control" name="service_title" id="service_title">
                                                <option value="">Select</option>
                                                @foreach ($service as $item)
                                                    <option value="{{ $item->id }}">{{ $item->titles }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('service_title'))
                                            <div class="text-danger">{{ $errors->first('service_title') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label for="stories_title" class="col-3 col-lg-2 col-form-label text-right"> Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="title" name="title"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('title'))
                                                <div class="text-danger">{{ $errors->first('title') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="link" class="col-3 col-lg-2 col-form-label text-right"> Link:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="link" name="link"  data-parsley-type=""  placeholder="" class="form-control">
                                                @if($errors->has('link'))
                                                <div class="text-danger">{{ $errors->first('link') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">     
                                            <label for="image" class="col-3 col-lg-2 col-form-label text-right"> Image:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="image" id="image" required />
                                           
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