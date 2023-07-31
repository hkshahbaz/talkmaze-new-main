@extends('layouts.app')

@section('content')
<!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login form -->
                <form method="POST" action="{{ route('admin.login') }}" class="login-form">
                @csrf
                @if(isset(request()->p))
                    <input type="hidden" name="p" value="{{ request()->p }}" />
                @endif
                    <div class="card mb-0 mt-5">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <a  href="{{ route('home') }}">
                                    <img  src="{{ asset('images/logo.png') }}" width="210px" height="65px">
                                </a>
                                <h5 class="mb-0 mt-4">{{ __('Login') }} to your account</h5>
                                <span class="d-block text-muted">Enter your credentials below</span>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                <div class="form-control-feedback">
                                    <i class="fas fa-envelope text-muted"></i>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                <div class="form-control-feedback">
                                    <i class="fas fa-lock text-muted"></i>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                <i class="far fa-arrow-alt-circle-right fa-lg ml-2"></i>
                                </button>
                            </div>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /login form -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
@endsection
@section('footer')
<div class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-collapse collapse m-0" id="navbar-footer">
            <span class="navbar-text p-0">
                © 2020. <a href="">TalkMaze</a> by <a href="https://www.oranjeclick.com/" target="_blank">Oranje Click</a>
            </span>
        </div>
</div>
@endsection