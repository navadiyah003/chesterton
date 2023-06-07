@extends('admin.layouts.navbar')

@section('content')
    {{-- <div class="dashboard-wrapper"> --}}
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Edit Integrated Service</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.update-integrated-service',$integrated_service->id)}}" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                       @method('PUT')
                                        <div class="form-group row">
                                            <label for="title" class="col-3 col-lg-2 col-form-label text-right"> Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="title" name="title"  data-parsley-type="" value="{{ $integrated_service->title }}" placeholder="" class="form-control">
                                                @if($errors->has('title'))
                                                <div class="text-danger">{{ $errors->first('title') }}</div>
                                            @endif
                                            </div>
                                        </div>

                                       
                                        <div class="form-group row">
                                            <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="inte_description" name="description" rows="3">{{ $integrated_service->description }} </textarea>
                                                @if($errors->has('description'))
                                                <div class="text-danger">{{ $errors->first('description') }}</div>
                                            @endif
                                            </div>
                                        </div>
                    
                                        <div class="form-group row">     
                                            <label for="image" class="col-3 col-lg-2 col-form-label text-right"> Image:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="image" id="image" required />
                                                <img src="{{ asset('/admin/uploads/integrated-service/image/'.$integrated_service->image) }}" width="70px" height="70px"
                                                                alt="Image">
                                                @if($errors->has('image'))
                                                    <div class="text-danger">{{ $errors->first('image') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Listed for:</label>
                                            <div class="col-9 col-lg-10 mt-2">
                                                <div class="row">
                                                    <?php $arrayCheck = explode(",",$integrated_service->listService) ?>
                                                    <div class="form-check col-md-2">
                                                        <input class="form-check-input" name="listService[]" value="home"
                                                        @if (in_array("home", $arrayCheck ))
                                                            checked
                                                        @else
                                                            
                                                        @endif type="checkbox" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault"> Home </label>
                                                    </div>
                                                    @foreach ($globalNetwork as $key=>$item)
                                                        <div class="form-check col-md-2">
                                                            <input class="form-check-input" name="listService[]" value="{{ $item->banner_title }}"  type="checkbox" 
                                                            @if (in_array($item->banner_title, $arrayCheck ))
                                                                checked
                                                            @else
                                                                
                                                            @endif
                                                            id="flexCheckDefault{{ $key }}">
                                                            <label class="form-check-label" for="flexCheckDefault{{ $key }}"> {{ $item->banner_title }} </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                {{-- <input type="text" id="description" name="description"  data-parsley-type=""  value="{{ $integrated_service->description }}" placeholder="" class="form-control"> --}}
                                                @if($errors->has('description'))
                                                <div class="text-danger">{{ $errors->first('description') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                       
                                            
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-lg-6 pl-0">
                                                <p class="text-center">
                                                    <button type="submit" class="btn btn-space btn-primary btn-lg">Update</button>
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