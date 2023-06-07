@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> Contact Us List</h3>
                            <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                                <input type="search" name="contact_search" id="contact_search" class="form-control" value="{{ request('contact_search')}}" placeholder="Search..."/>
                            </div> 
                            
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="font-size:15px">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0"> Properties Tab </th>
                                                <th class="border-0"> Title </th>
                                                <th class="border-0"> first name </th>
                                                <th class="border-0"> Last name </th>
                                                <th class="border-0"> Email </th>
                                                <th class="border-0"> Phone Number </th>
                                                <th class="border-0"> Address </th>
                                                <th class="border-0"> Zipcode </th>
                                                <th class="border-0"> Contact Help</th>
                                                <th class="border-0" width="150px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="allData">
                                           
                                            @forelse($contact as $key=>$item)
                                                <tr id="{{ $item->id }}" >
                                                    <td>{{ $contact->firstItem() + $key }}</td>  
                                                     <td class="text-truncate" style="max-width: 150px;">{{ $item['properties_tab'] }}</td>        
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['title'] }}</td>  
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['f_name'] }}</td>                                   
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['l_name'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['email'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['phone_number'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['address'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['zipcode'] }}</td>
                                                    <td class="text-truncate" style="max-width: 150px;">{{ $item['contact_help'] }}</td>

                                                   <td>
                                                        <a class="btn btn-primary btn-md" href="{{route('admin.view-contact-us',$item->id) }}"><i class="fas fa-eye"></i> View </a>    
                                                    </td>                                                                                                 
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9">
                                                        <h5 class="text-center" style="border:1 px solid black;border-radius: 5px;background-color:rgb(184, 226, 217);padding:15px;">
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
                                        {!! $contact->withQueryString()->links('pagination::bootstrap-5')!!}     
                                        </span>  
                                    </div>    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
