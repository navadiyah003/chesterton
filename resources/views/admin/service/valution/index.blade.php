@extends('admin.layouts.navbar')

@section('content')
<div class="d-flex justify-content-end mr-5">
    <a href="{{ url('admin/service-valution/create')}}" class="btn btn-primary "><i
            class="fa fa-plus-circle fa-fw me-1"></i>
        Create  Valution</a>
</div>
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="col-lg-12">
            <div class="card">
                <h3 class="card-header" style="background:rgb(230, 83, 103)"> Service Valuation List</h3>

                <div class="input-group col-lg-4 offset-3 mb-3 mt-4">
                    <input type="search" name="valuation_search" id="valuation_search" class="form-control" value="{{ request('valuation_search')}}" placeholder="Search..."/>
                </div> 

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size:15px">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0"> Valution Content</th>
                                    <th class="border-0"> Valution Image: </th>
                                    <th class="border-0" width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody class="allData">
                                @forelse($about as $key=>$item)
                                <tr id="{{ $item->id }}">
                                    <td>{{ $about->firstItem() + $key }}</td>
                                    <td>{{ $item['valution_content'] }}</td>
                                    <td>
                                        <img src="{{ asset('/admin/uploads/service/'.$item->valution_image) }}"
                                            width="70px" height="70px" alt="Image">
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-md"
                                            href="{{route('admin.service-valution.edit', $item->id) }}"><i
                                                class="fas fa-edit"></i> Edit </a>
                                        <button type="button" class="btn btn-danger btn-md" onclick="delete_about(this)"
                                            data-id="{{ $item->id }}" id="about_delete"><i
                                                class="fas fa-trash-alt"></i> Delete </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">
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
                                {!! $about->withQueryString()->links('pagination::bootstrap-5')!!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
function delete_about(e) {
    let id = e.getAttribute('data-id');
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {

            if (willDelete) {
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/admin/delete-valution')}}/" + id,
                    data: {
                        id: id,
                        "_token": "{{csrf_token()}}",
                    },
                    success: function(response) {
                        swal(" Your About  has been deleted!", {
                            icon: "success",
                        });
                        $("#" + id + "").remove();
                    }
                });

            } else {
                swal("Your imaginary file is safe!");
            }
        });
}
</script>

@endsection