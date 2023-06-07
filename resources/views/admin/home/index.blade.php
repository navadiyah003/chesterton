@extends('admin.layouts.navbar')

@section('content')
{{-- <div class="dashboard-wrapper"> --}}
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header" style="background:rgb(230, 83, 103)">Add Properties</h3>
                <div class="card-body">
                    <form action="{{ route('admin.home-properties.store')}}" method="POST" id="form"
                        data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="stories_title" class="col-3 col-lg-2 col-form-label text-right"> Title:</label>
                            <div class="col-9 col-lg-10">
                                <input type="text" name="title" data-parsley-type="" placeholder=""
                                    class="form-control">
                                @if($errors->has('title'))
                                <div class="text-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Price:</label>
                            <div class="col-9 col-lg-10">
                                <input type="text" name="price" data-parsley-type="" placeholder=""
                                    class="form-control">
                                @if($errors->has('price'))
                                <div class="text-danger">{{ $errors->first('price') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Place:</label>
                            <div class="col-9 col-lg-10">
                                <input type="text" name="place" data-parsley-type="" placeholder=""
                                    class="form-control">
                                @if($errors->has('place'))
                                <div class="text-danger">{{ $errors->first('place') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-3 col-lg-2 col-form-label text-right"> Image:</label>
                            <div class="col-9 col-lg-10">
                                <input type="file" class="form-control form-control-lg" name="image" id="image" value=""
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