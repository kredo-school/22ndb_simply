@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="text-center title h1">{{ __('R E G I S T E R') }}</div>

            <div class="mt-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                        <div class="col-md-5">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                        <div class="col-md-5">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}
                            <p class="xsmall">( city or states only )</p>
                        </label>

                        <div class="col-md-5">
                            <input id="address" type="text" class="form-control" name="address" required autocomplete="address">
                        </div>
                    </div>
            </div>

            <div class="row mb-4">
                        <div class="col-md-4 mx-auto">
                            <button type="submit" class="btn btn-dark btn-lg w-100 button">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection
