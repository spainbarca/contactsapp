@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center min-vh-90">
                    <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center mb-5">
                                        <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                            <i class="mdi mdi-alpha-x-circle"></i> <b>XACTON
                                            </b>
                                        </a>
                                    </div>
                                    <h1 class="h5 mb-1">Create an Account!</h1>
                                    <p class="text-muted mb-4">Don't have an account? Create your own account, it takes less than a minute</p>
                                    <form method="POST" action="{{ route('register') }}" novalidate>
                                        @csrf

                                        <div class="row mb-3">
                                            <input type="text"  id="name" placeholder="{{ __('Name') }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="row mb-3">
                                            <input type="email" id="email" placeholder="{{ __('Email Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <input type="password" id="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" id="password" placeholder="{{ __('Confirm Password') }}" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <h5 class="text-muted font-size-16">Sign up using</h5>

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
                                            <p class="text-muted mb-0">Already have account?  <a href="{{ route('login') }}" class="text-muted font-weight-medium ml-1"><b>{{ __('Login') }}</b></a></p>
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
</div>

@endsection
