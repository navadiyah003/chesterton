@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> Properties List</h3>
                        <form action="{{ url('/admin/properties-list') }}" method="get">
                            <div class="input-group col-lg-6 offset-3 mb-3 mt-4">
                                <label class="mr-3 d-flex align-items-center">Choose Country</label>
                                    <select class="form-control" name="country">
                                        <option selected disabled>Select</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->contry_name }}">{{ $country->contry_name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="ml-3 btn button-3">SUBMIT</button>
                            </div>
                        </form>
                            
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="font-size:15px">
                                    <thead class="bg-light">
                                        <tr class="border-0 text-bold ">
                                            <th class="border-0"> # </th>
                                            <th class="border-0"> Country Name </th>
                                            <th class="border-0"> Property Name </th>
                                            <th class="border-0"> Property Image </th>
                                            <th class="border-0"> Featured </th>
                                        </tr>
                                    </thead>
                                    <tbody class="allData">
                                        @forelse($properties as $key=>$property)
                                            <tr id="{{ $property->id }}" >
                                                <td>{{ $properties->firstItem() + $key }} </td>
                                                <td>{{ $property['country'] }}</td>
                                                <td>{{ $property['propertyName'] }}</td>
                                                <td>
                                                    @if ($property->images != "null")
                                                        <?php $image =  explode(",",$property->images)?>
                                                        <img src="{{ $image[0] }}" alt="" style="width: 70px;height: 70px;">
                                                    @else
                                                        <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="" style="width: 70px;height: 70px;">
                                                    @endif
                                                    {{-- <img src="{{ $property['images'][0] }}" width="70px" height="70px" alt="Image"> --}}
                                                </td>
                                                <td>
                                                    <input data-id="{{ $property->id }}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $property->feature ? 'checked' : '' }}>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">
                                                    <h5 class="text-center" style="border:1 px solid black;border-radius:5px;background-color:rgb(184, 226, 217);padding:15px;">
                                                        No Data Found.
                                                    </h5>        
                                                </td>
                                            </tr>
                                        @endforelse   
                                    </tbody>
                                    <tbody class="searchData" id="content"></tbody>
                                </table>
                                <div class="ml-3 mt-4">
                                    <span>
                                    {!! $properties->withQueryString()->links('pagination::bootstrap-5')!!}     
                                    </span>  
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

