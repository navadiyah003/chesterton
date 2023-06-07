@extends('admin.layouts.navbar')

@section('content')
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="col-lg-12">
            <div class="card">
                <h3 class="card-header" style="background:rgb(230, 83, 103)">Career Details</h3>

                <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                    <input type="search" name="applicant_search" id="applicant_search" class="form-control"
                        value="{{ request('applicant_search')}}" placeholder="Search..." />
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size:15px">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Title</th>
                                    <th class="border-0"> BG Image </th>
                                    <th class="border-0"> BG Image Mobile</th>
                                    <th class="border-0">Sub Title</th>
                                    <th class="border-0">Sub Description</th>
                                    <th class="border-0">Images</th>
                                    <th class="border-0"> Opp Title </th>
                                    <th class="border-0"> Opp Description </th>
                                    <th class="border-0"> Contact Title </th>
                                    <th class="border-0" width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody class="allData">
                                @forelse($details as $key=>$detail)
                                <tr id="{{ $detail->id }}">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $detail->title }}</td>
                                    <td>
                                    <img src="{{ asset('/admin/uploads/career/'.$detail->bg_image) }}" width="70px" height="70px"
                                                            alt="Image">
                                    </td>
                                    <td>
                                    <img src="{{ asset('/admin/uploads/career/'.$detail->bg_image_mobile) }}" width="70px" height="70px"
                                                            alt="Image">
                                    </td>
                                    <td>{{ $detail->sub_title }}</td>
                                    <td>{{ $detail->sub_description }}</td>
                                    <td>
                                    @if($detail->images)         
                                        @foreach(json_decode($detail->images) as $picture)

                                            <img src="{{ asset('/admin/uploads/career/'.$picture) }}" width="70px" height="70px" alt="Image">
                                        @endforeach
                                    @endif
                                    </td>
                                    <td>{{ $detail->opp_title }}</td>
                                    <td>{{ $detail->opp_description }}</td>
                                    <td>{{ $detail->contact_title }}</td>

                                    <td>
                                    <a class="btn btn-primary btn-md" href="{{route('admin.edit-career-description', $detail->id) }}"><i class="fas fa-edit"></i> Edit </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10">
                                        <h5 class="text-center"
                                            style="border:1 px solid black;border-radius: 5px;background-color:rgb(184, 226, 217);padding:15px;">
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
                                {!! $details->withQueryString()->links('pagination::bootstrap-5')!!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection