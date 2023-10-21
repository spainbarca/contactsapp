@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Your free trial has ended') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Upgrade to pro version') }} <a href="{{ route('checkout') }}"><p> here</p> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
