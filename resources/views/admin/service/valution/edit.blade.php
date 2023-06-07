@extends('admin.layouts.navbar')

@section('content')
{{-- <div class="dashboard-wrapper"> --}}
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h3 class="card-header" style="background:rgb(230, 83, 103)">Edit Service Valuation</h3>
                <div class="card-body">
                <form action="{{route('admin.service-valution.update',$about->id)}}" method="POST" id="form" data-parsley-validate=""
                    novalidate="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="stories_title" class="col-3 col-lg-2 col-form-label text-right"> Service:</label>
                        <div class="col-9 col-lg-10">
                            <select class="form-control" name="service_title" id="service_title">
                                <option value="">Select</option>
                                @foreach ($service as $item)
                                    <option value="{{ $item->id }}" {{ ($about->service_id == $item->id) ? 'selected' : '' }}>{{ $item->titles }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('service_title'))
                            <div class="text-danger">{{ $errors->first('service_title') }}</div>
                            @endif
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Valution content:</label>
                            <div class="col-9 col-lg-10">
                                <input type="text" name="valution_content" data-parsley-type="" placeholder=""  value="{{ $about->valution_content }}"
                                    class="form-control">
                                @if($errors->has('valution_content'))
                                <div class="text-danger">{{ $errors->first('valution_content') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-3 col-lg-2 col-form-label text-right"> Valution Image:</label>
                            <div class="col-9 col-lg-10">
                                <input type="file" class="form-control form-control-lg"  name="valution_image" id="valution_image" value=""
                                    required />
                                 <img src="{{ asset('/admin/uploads/service/'.$about->valution_image) }}"
                                            width="70px" height="70px" alt="Image">
                                @if($errors->has('valution_image'))
                                <div class="text-danger">{{ $errors->first('valution_image') }}</div>
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