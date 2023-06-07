@extends('admin.layouts.navbar')

@section('content')
{{-- <div class="dashboard-wrapper"> --}}
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header" style="background:rgb(230, 83, 103)">Edit Banner Video</h3>
                <div class="card-body">
                <form action="{{route('admin.update-slide',$about->id)}}" method="POST" id="form" data-parsley-validate=""
                    novalidate="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="image" class="col-3 col-lg-2 col-form-label text-right"> Select Video:</label>
                        <div class="col-9 col-lg-10">
                            <input type="file" class="form-control form-control-lg" name="path" id="image" required />
                            <video width="320" height="240" controls>
                                <source src="{{ asset('admin/uploads/videos/'.$about->path)}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

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