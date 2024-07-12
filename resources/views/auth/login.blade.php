@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="text-center fw-bold title">{{ __('L O G I N') }}</div>

                <div class="mt-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                
                        <div class="row mb-4 mt-5">
                            <div class="col-md-4 mx-auto ">
                                <button type="submit" class="btn btn-dark btn-lg w-100" style="border-radius: 45px;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-0 mt-4">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #9EA6A6;">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="row mb-0">
                            @if (Route::has('register'))
                                <p class="text-center" style="color: #9EA6A6;">
                                    Don't have an account? 
                                    <a class="btn btn-link" href="{{ route('register') }}"  style="color: #9EA6A6;">
                                   {{ __('Register') }}</a>
                                </p>
                            @endif
                        </div>

                    </form>
            
        </div>
    </div>
</div>
@endsection
