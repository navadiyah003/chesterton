@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> Region List</h3>
                        <form action="{{ url('/admin/add-mega-menu') }}" method="post">
                            @csrf
                            <input type="hidden" name="updateValue" value="1">
                            <div class="form-group row">
                                <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Asia :</label>
                                <div class="col-9 col-lg-10 mt-2">
                                    <div class="row">
                                        @foreach ($countries as $key=>$item)
                                            <div class="form-check col-md-2">
                                                <input class="form-check-input" name="asiaListService[]" value="{{ $item->country_sfid }}" 
                                                @if (in_array($item->country_sfid, $expAsia))
                                                    checked
                                                @endif
                                                 type="checkbox" id="flexCheckAsia{{ $key }}">
                                                <label class="form-check-label" for="flexCheckAsia{{ $key }}"> {{ $item->contry_name }} </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- <input type="text" id="description" name="description"  data-parsley-type=""  value="{{ $integrated_service->description }}" placeholder="" class="form-control"> --}}
                                    @if($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Caribbean :</label>
                                <div class="col-9 col-lg-10 mt-2">
                                    <div class="row">
                                        @foreach ($countries as $key=>$item)
                                            <div class="form-check col-md-2">
                                                <input class="form-check-input" name="caribbeanListService[]" value="{{ $item->country_sfid }}" 
                                                @if (in_array($item->country_sfid, $expCaribbean))
                                                    checked
                                                @endif type="checkbox" id="flexCheckCaribbeann{{ $key }}">
                                                <label class="form-check-label" for="flexCheckCaribbeann{{ $key }}"> {{ $item->contry_name }} </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- <input type="text" id="description" name="description"  data-parsley-type=""  value="{{ $integrated_service->description }}" placeholder="" class="form-control"> --}}
                                    @if($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Europe :</label>
                                <div class="col-9 col-lg-10 mt-2">
                                    <div class="row">
                                        @foreach ($countries as $key=>$item)
                                            <div class="form-check col-md-2">
                                                <input class="form-check-input" name="europeListService[]" value="{{ $item->country_sfid }}"
                                                @if (in_array($item->country_sfid, $expEurope))
                                                    checked
                                                @endif type="checkbox" id="flexCheckEurope{{ $key }}">
                                                <label class="form-check-label" for="flexCheckEurope{{ $key }}"> {{ $item->contry_name }} </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- <input type="text" id="description" name="description"  data-parsley-type=""  value="{{ $integrated_service->description }}" placeholder="" class="form-control"> --}}
                                    @if($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="description" class="col-3 col-lg-2 col-form-label text-right"> Mena :</label>
                                <div class="col-9 col-lg-10 mt-2">
                                    <div class="row">
                                        @foreach ($countries as $key=>$item)
                                            <div class="form-check col-md-2">
                                                <input class="form-check-input" name="menaListService[]" value="{{ $item->country_sfid }}"
                                                @if (in_array($item->country_sfid, $expMena))
                                                    checked
                                                @endif
                                                type="checkbox" id="flexCheckDefault{{ $key }}">
                                                <label class="form-check-label" for="flexCheckDefault{{ $key }}"> {{ $item->contry_name }} </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- <input type="text" id="description" name="description"  data-parsley-type=""  value="{{ $integrated_service->description }}" placeholder="" class="form-control"> --}}
                                    @if($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mx-auto d-flex" style="place-content: space-around;">
                                    <button type="submit" class="btn button-3">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

