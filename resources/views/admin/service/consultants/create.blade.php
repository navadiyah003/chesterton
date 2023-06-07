@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Add Service Consultants</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.service-consultants.store')}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                        <div class="form-group row">
                                            <label for="title" class="col-3 col-lg-2 col-form-label text-right">Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="title" name="title"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('title'))
                                                <div class="text-danger">{{ $errors->first('title') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-3 col-lg-2 col-form-label text-right">Name:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="name" name="name"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('name'))
                                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                            </div>                            
                                        </div>

                                        <div class="form-group row">
                                            <label for="content" class="col-3 col-lg-2 col-form-label text-right"> Content:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="consultant_content" name="content" rows="3"></textarea>
                                                @if($errors->has('content'))
                                                <div class="text-danger">{{ $errors->first('content') }}</div>
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