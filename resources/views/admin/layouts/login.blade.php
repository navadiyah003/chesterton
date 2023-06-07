@extends('auth')

@section('content')
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img src="{{asset('admin/assets/images/logo.png')}}"  alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="{{ route('admin.login.custom') }}" data-parsley-validate="" novalidate=""  method="post">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email"  name="email"  type="text" placeholder="Username" autocomplete="off">
                        @if($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password"  name="password"  type="password" placeholder="Password">
                        @if($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{ route('admin.register-user') }}" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{ route('admin.forgotPassword.view') }}" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
@endsection
