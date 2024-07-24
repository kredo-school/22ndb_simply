@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">          
        <div class="text-center title mt-5">{{ __('R E S E T')}}&nbsp;&nbsp;&nbsp;&nbsp;{{__('P A S S W O R D')}}</div>


            <div class="mt-5">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="row mb-5">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                        <div class="col-md-5">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
            </div>

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <button type="submit" class="btn btn-dark btn-lg w-100 button">
                                {{ __('Send Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection
