@extends('admin.layouts.navbar')

@section('content')
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="col-lg-12">
            <div class="card">
                <h3 class="card-header" style="background:rgb(230, 83, 103)"> User List</h3>

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
                                    <th class="border-0">Full Name</th>
                                    <th class="border-0"> Email </th>
                                    <th class="border-0">Message</th>
                                    <th class="border-0"> CV </th>
                                    <th class="border-0" width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody class="allData">
                                @forelse($applicant as $key=>$applier)
                                <tr id="{{ $applier->id }}">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $applier->fullname }}</td>
                                    <td>{{ $applier->email }}</td>
                                    <td>{{ $applier->message }}</td>
                                    <td><a class="btn btn-primary btn-md" target="_blank"
                                            href="{{url('admin/uploads/cv', $applier->cv) }}"><i
                                                class="fas fa-download"></i></a></td>

                                    <td>
                                        <button type="button" class="btn btn-danger btn-md" onclick="delete_applicant(this)"
                                            data-id="{{ $applier->id }}" id="delete_applicant"><i
                                                class="fas fa-trash-alt"></i>
                                            Delete </button>

                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">
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
                                {!! $applicant->withQueryString()->links('pagination::bootstrap-5')!!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection