@extends('layouts.user-guide')

@section('title', 'User Guide Register Account')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">Let's register your account !</h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="d-flex flex-column justify-content-center register-spacing">                
                <p class="mb-5">1. Go to the <a href="{{ route('register') }}" class="text-dark">Register</a> page.</p>
                <p class="mb-5">2. Fill in your information.</p>
                <p>3. Click the REGISTER button.</p>
            </div>
            
            <div>
                <p class="h4 semi-bold mt-4 ms-70">Now you are ready to login.</p>
            </div>

        </div>
        <div class="col d-flex align-items-center">
            <img src="{{ asset('images/user-guide/register.png') }}" alt="Register Image" class="image-border mx-auto mt-5">
        </div>
    </div>
</div>
@endsection