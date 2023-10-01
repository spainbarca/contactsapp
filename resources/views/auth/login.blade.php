@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center min-vh-90">
                <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center mb-5">
                                    <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                        <i class="mdi mdi-alpha-x-circle"></i> <b>XACTON</b>
                                    </a>h
                                </div>
                                <h1 class="h5 mb-1">{{ __('Welcome Back!') }}</h1>
                                <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                                <form class="user" method="POST" action="{{ route('login') }}" novalidate>
                                    @csrf
                                    <div class="row mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  id="email" placeholder="Email Address" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block waves-effect waves-light">
                                        {{ __('Login') }}
                                    </button>

                                    <div class="text-center mt-4">
                                        <h5 class="text-muted font-size-16">Sign in using</h5>

                                        <ul class="list-inline mt-3 mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </form>

                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                        @if (Route::has('password.request'))
                                            <a class="text-muted font-weight-medium ml-1" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        @if (Route::has('register'))
                                        <p class="text-muted mb-0">Don't have an account? <a class="text-muted font-weight-medium ml-1" href="{{ route('register') }}"><b>{{ __('Register') }}</b></a></p>
                                        @endif
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div> <!-- end .padding-5 -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end .w-100 -->
            </div> <!-- end .d-flex -->
        </div> <!-- end col-->
    </div> <!-- end row -->
</div>





@endsection
