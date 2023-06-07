@extends('auth')

@section('content')
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img src="{{asset('admin/assets/images/logo.png')}}"  alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="{{ route('admin.resetPassword.action', $id) }}" data-parsley-validate="" novalidate=""  method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password"  name="password"  type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password"  name="password_confirmation"  type="password" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Create Password</button>
                </form>
            </div>
        </div>
    </div>
@endsection