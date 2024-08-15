@extends('layouts.user-guide')

@section('title', 'User Guide Login')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">Let's login !</h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center login-spacing">                
                <p class="mb-5">1. Go to the <a href="{{ route('login') }}" class="text-dark">Login</a> page.</p>
                <p class="mb-5">2. Fill in username and password.</p>
                <p>3. Click the LOGIN button.</p>
            </div>
        </div>
        <div class="col d-flex align-items-center">
            <img src="{{ asset('images/user-guide/login.png') }}" alt="Login Image" class="image-border mx-auto mt-4">
        </div>
    </div>
</div>
@endsection