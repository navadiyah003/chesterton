@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Add Team Member</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.add-our-team')}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                        <div class="form-group row">
                                            <label for="member_name" class="col-3 col-lg-2 col-form-label text-right"> Member Name:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="member_name" name="member_name"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('member_name'))
                                                <div class="text-danger">{{ $errors->first('member_name') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="member_position" class="col-3 col-lg-2 col-form-label text-right"> Member Position:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="member_position" name="member_position"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('member_position'))
                                                <div class="text-danger">{{ $errors->first('member_position') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                       
                                        <div class="form-group row">
                                            <label for="member_desc" class="col-3 col-lg-2 col-form-label text-right">Member Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="member_desc" name="member_desc" rows="3"></textarea>
                                                @if($errors->has('member_desc'))
                                                <div class="text-danger">{{ $errors->first('member_desc') }}</div>
                                            @endif
                                            </div>
                                        </div>
                    
                                        <div class="form-group row">     
                                            <label for="member_image" class="col-3 col-lg-2 col-form-label text-right"> Member Image:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="member_image" id="member_image" required />
                                           
                                                @if($errors->has('member_image'))
                                                    <div class="text-danger">{{ $errors->first('member_image') }}</div>
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