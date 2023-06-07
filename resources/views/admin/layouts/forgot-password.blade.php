@extends('auth')

@section('content')
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img src="{{asset('admin/assets/images/logo.png')}}"  alt="logo"><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">

            @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
            <form action="{{ route('admin.forgotPassword.action') }}" method="POST">
            @csrf
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Your Email" autocomplete="off">
                    </div>
                    <div class="form-group pt-1"><button type="submit" class="btn btn-block btn-primary btn-xl">Reset Password</button></div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="pages-sign-up.html">Sign Up</a></span>
            </div>
        </div>
    </div>
@endsection