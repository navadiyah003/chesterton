@extends('admin.layouts.navbar')

@section('content')
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header" style="background:rgb(230, 83, 103)"> Contact Us Detail
                             <a href="{{ url('admin/contact-us-list')}}" class="btn btn-primary float-right mr-5"> Back </a>
                        </h3>
                            <div class="card-body p-0 mt-2">
                                <div class="row ">
                                        <div class="col-md-3">
                                        <label for="" class="contact_detail_label"> Properties Tab:</label>
                                        </div>
                                        <div class="col-md-9 border contact_detail_div">{{ $view_contact->properties_tab }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                        <div class="col-md-3">
                                        <label for="" class="contact_detail_label"> Title:</label>
                                        </div>
                                        <div class="col-md-9 border contact_detail_div">{{ $view_contact->title }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                        <div class="col-md-3">
                                        <label for="" class="contact_detail_label"> First name:</label>
                                        </div>
                                        <div class="col-md-9 border contact_detail_div">{{ $view_contact->f_name }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                        <div class="col-md-3">
                                        <label for="" class="contact_detail_label"> Last name:</label>
                                        </div>
                                        <div class="col-md-9 border contact_detail_div">{{ $view_contact->l_name }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                        <div class="col-md-3">
                                        <label for="" class="contact_detail_label"> Email:</label>
                                        </div>
                                        <div class="col-md-9 border contact_detail_div">{{ $view_contact->email }}</div>
                                </div>
                                <hr>

                                <div class="row">
                                        <div class="col-md-3">
                                        <label for="" class="contact_detail_label"> Mobile Number:</label>
                                        </div>
                                        <div class="col-md-9 border contact_detail_div">{{ $view_contact->phone_number }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                        <div class="col-md-3">
                                        <label for="" class="contact_detail_label"> Address:</label>
                                        </div>
                                        <div class="col-md-9 border contact_detail_div">{{ $view_contact->address }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                        <div class="col-md-3">
                                        <label for="" class="contact_detail_label"> Zipcode:</label>
                                        </div>
                                        <div class="col-md-9 border contact_detail_div">{{ $view_contact->zipcode }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                        <div class="col-md-3">
                                        <label for="" class="contact_detail_label"> Contact Help:</label>
                                        </div>
                                        <div class="col-md-9 border contact_detail_div">{{ $view_contact->contact_help }}</div>
                                </div>
                                <hr>
                                      
                            </div>
                    </div>           
                </div>
            </div>
        </div>
@endsection
