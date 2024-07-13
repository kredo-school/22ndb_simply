@extends('layouts.app')

@section('title', 'Password Reset')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">         
            <div class="text-center fw-bold h1">{{ __('R E S E T')}}&nbsp;&nbsp;&nbsp;&nbsp;{{__('P A S S W O R D')}}   
            </div>

            <div class="mt-5">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                        <div class="col-md-5">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>

                        <div class="col-md-5">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-5">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-5">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                   
            </div>

                <div class="row mb-4">
                    <div class="col-md-4 mx-auto">
                        <button type="submit" class="btn btn-dark btn-lg w-100 button" style="border-radius: 45px;">
                            {{ __('Reset') }}
                        </button>
                    </div>
                </div>
                </form>
        </div>
    </div>
</div>
@endsection
