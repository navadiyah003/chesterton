@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Edit User</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.update-user',$users->id)}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                       @method('PUT')
                                        <div class="form-group row">
                                            <label for="name" class="col-3 col-lg-2 col-form-label text-right">User name:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="name" name="name"  data-parsley-type="" value="{{ $users->name }}" placeholder="" class="form-control">
                                                @if($errors->has('name'))
                                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-3 col-lg-2 col-form-label text-right">Email:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="email" name="email"  data-parsley-type=""  value="{{ $users->email }}" placeholder="" class="form-control">
                                                @if($errors->has('email'))
                                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                            </div>                            
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-3 col-lg-2 col-form-label text-right">Password:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="password" id="password" name="password"  value="{{ $users->password }}" data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('password'))
                                                <div class="text-danger">{{ $errors->first('password') }}</div>
                                            @endif
                                            </div>                            
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-3 col-lg-2 col-form-label text-right">Mobile no.:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="mobile_no" name="mobile_no"  data-parsley-type="" value="{{ $users->mobile_no }}" placeholder="" class="form-control">
                                                @if($errors->has('mobile_no'))
                                                <div class="text-danger">{{ $errors->first('mobile_no') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="gender" class="col-3 col-lg-2 col-form-label text-right"> Gender:</label>
                                             <div class="col-9 col-lg-10 ">     
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label" for="male">
                                                        <input type="radio" {{ ($users->gender == 'Male') ? 'checked': ''}} class="form-check-input"  name="gender" id="male" value="Male" style="display:inline-block">Male
                                                    </label>
                                                </div>
                                                 <div class="form-check form-check-inline">
                                                    <label class="form-check-label" for="female">
                                                        <input type="radio" {{ ($users->gender == 'Female') ? 'checked': ''}} class="form-check-input"  name="gender" id="female" value="Female" style="display:inline-block">Female
                                                    </label>
                                                </div>
                                                
                                                @if($errors->has('gender'))
                                                <div class="text-danger">{{ $errors->first('gender') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="address" class="col-3 col-lg-2 col-form-label text-right">Address:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="user_address" name="address" rows="3">{{ $users->address }}</textarea>
                                                @if($errors->has('address'))
                                                <div class="text-danger">{{ $errors->first('address') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">     
                                            <label for="image" class="col-3 col-lg-2 col-form-label text-right"> Image:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="image" id="image" required />
                                                <img src="{{ asset('/admin/uploads/user/image/'.$users->image) }}" width="70px" height="70px"
                                                                alt="Image">
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