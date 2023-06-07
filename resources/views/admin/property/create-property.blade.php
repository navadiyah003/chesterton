@extends('admin.layouts.navbar')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header" style="background:rgb(230, 83, 103)">Add Property</h3>
                                <div class="card-body">
                                    <form action="#" method="POST" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                                       @csrf 
                                        <div class="form-group row">
                                            <label for="property_title" class="col-3 col-lg-2 col-form-label text-right">Property Title:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="property_title" name="property_title"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('property_title'))
                                                <div class="text-danger">{{ $errors->first('property_title') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="property_type" class="col-3 col-lg-2 col-form-label text-right">Property Type:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="property_type" name="property_type"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('property_type'))
                                                <div class="text-danger">{{ $errors->first('property_type') }}</div>
                                            @endif
                                            </div>                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="short_description" class="col-3 col-lg-2 col-form-label text-right">Property Short Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="short_description" name="short_description"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('short_description'))
                                                <div class="text-danger">{{ $errors->first('short_description') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-3 col-lg-2 col-form-label text-right">Property Description:</label>
                                            <div class="col-9 col-lg-10">
                                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                                @if($errors->has('description'))
                                                <div class="text-danger">{{ $errors->first('description') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="property_price" class="col-3 col-lg-2 col-form-label text-right">Price:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="property_price" name="property_price"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('property_price'))
                                                <div class="text-danger">{{ $errors->first('property_price') }}</div>
                                            @endif
                                            </div>                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="bedrooms" class="col-3 col-lg-2 col-form-label text-right">Bedrooms:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="bedrooms" name="bedrooms"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('bedrooms'))
                                                <div class="text-danger">{{ $errors->first('bedrooms') }}</div>
                                            @endif
                                            </div>                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="bathrooms" class="col-3 col-lg-2 col-form-label text-right">Bathrooms:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="bathrooms" name="bathrooms"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('bathrooms'))
                                                <div class="text-danger">{{ $errors->first('bathrooms') }}</div>
                                            @endif
                                            </div>                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="property_area" class="col-3 col-lg-2 col-form-label text-right">Property Area:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="property_area" name="property_area"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('property_area'))
                                                <div class="text-danger">{{ $errors->first('property_area') }}</div>
                                            @endif
                                            </div>                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="street" class="col-3 col-lg-2 col-form-label text-right">Street:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="street" name="street"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('street'))
                                                <div class="text-danger">{{ $errors->first('street') }}</div>
                                            @endif
                                            </div>                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="location" class="col-3 col-lg-2 col-form-label text-right">Location:</label>
                                            <div class="col-9 col-lg-10">                                               
                                                 <input type="text" id="location" name="location"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('location'))
                                                <div class="text-danger">{{ $errors->first('location') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="country" class="col-3 col-lg-2 col-form-label text-right"> Country:</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="text" id="country" name="country"  data-parsley-type="" placeholder="" class="form-control">
                                                @if($errors->has('country'))
                                                <div class="text-danger">{{ $errors->first('country') }}</div>
                                            @endif
                                            </div>
                                        </div>
                                                                                
                                        <div class="form-group row">     
                                            <label for="property_image" class="col-3 col-lg-2 col-form-label text-right">Property Image:</label>  
                                            <div class="col-9 col-lg-10">                             
                                                <input type="file" class="form-control form-control-lg" name="property_image" id="property_image" required />
                                            </div>
                                            @if($errors->has('property_image'))
                                                <div class="text-danger">{{ $errors->first('property_image') }}</div>
                                            @endif
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
    </div>

@endsection