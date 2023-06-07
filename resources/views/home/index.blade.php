@extends('home.layouts.header')
@section('content')

    <!-- Banner Section Starts here -->
    @include('home.banner')
    <!-- Banner Section Starts here -->

    <!-- our feature property starts here -->
    @include('home.feature-property')
    <!-- our feature property starts here -->

    <!-- our-integrated service starts here -->
    @include('home.our-integrated')
    <!-- our-integrated service starts here -->


    <!-- our-legacy-section-starts -->
    @include('home.our-legacy')

    <!-- our-legacy-section-starts -->

    <!-- popular-serach-section-starts -->
    @include('home.popular-serach')
    <!-- popular-serach-section-ends -->

@endsection