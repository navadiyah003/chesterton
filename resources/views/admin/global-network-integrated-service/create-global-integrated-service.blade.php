@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Add Global Integrated Service</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.add-global-integrated-service')}}" method="POST" id="globalIntegrateForm" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                        <div class="form-group row">
                                            <label for="global_network_country" class="col-3 col-lg-2 col-form-label text-right"> Select Country:</label>
                                            <div class="col-9 col-lg-10">
                                                <select class="form-control" name="global_network_country" id="global_network_country">
                                                    <option value="">Select</option>
                                                    @foreach ($globalNetwork as $item)
                                                        <option value="{{ $item->banner_title }}">{{ $item->banner_title }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('global_network_country'))
                                                    <div class="text-danger">{{ $errors->first('global_network_country') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="global_network_integrate_title" class="col-3 col-lg-2 col-form-label text-right"> Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="global_network_integrate_title" name="global_network_integrate_title"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('global_network_integrate_title'))
                                                <div class="text-danger">{{ $errors->first('global_network_integrate_title') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label for="global_network_integrate_description" class="col-3 col-lg-2 col-form-label text-right"> Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="global_network_integrate_description" name="global_network_integrate_description" rows="3"></textarea>
                                                @if($errors->has('global_network_integrate_description'))
                                                <div class="text-danger">{{ $errors->first('global_network_integrate_description') }}</div>
                                            @endif
                                            </div>
                                        </div>
                    
                                        <div class="form-group row">     
                                            <label for="global_network_integrate_image" class="col-3 col-lg-2 col-form-label text-right"> Image:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="global_network_integrate_image" id="global_network_integrate_image" required />
                                           
                                                @if($errors->has('global_network_integrate_image'))
                                                    <div class="text-danger">{{ $errors->first('global_network_integrate_image') }}</div>
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