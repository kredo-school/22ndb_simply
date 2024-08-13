@extends('layouts.user-guide')

@section('title', 'User Guide Register Account')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">Let's register your account !</h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="d-flex flex-column justify-content-center" style="margin-top: 80px; margin-left:100px;">                
                <p class="mb-4">1. Go to the <a href="{{ route('register') }}" class="text-dark fw-bold">Register</a> page.</p>
                <p class="mb-4">2. Fill in your information.</p>
                <p>3. Click the REGISTER button.</p>
            </div>
            
            <div>
                <p class="h4 fw-bold mt-4" style="margin-left:50px;">Now you are ready to login.</p>
            </div>

        </div>
        <div class="col d-flex align-items-center">
            <img src="{{ asset('images/user-guide/register.png') }}" alt="Register Image" class="image-border mx-auto mt-5">
        </div>
    </div>
</div>
@endsection