@extends('layouts.user-guide')

@section('title', 'User Guide Login Password Reset')

@section('content')
<h2 class="mt-4 ms-3 fw-bold">If you forgot the password...</h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center reset-spacing">                
                <p>1. Click the  “<a href="{{ route('password.request') }}" class="text-dark">Forgot Password?</a>” in Login page.</p>
                <p>2. Enter the registered email address and click the Send Reset Link button.</p>
                <p>3. Check your emailbox. The email is from Simply (noreply@simply.com).</p>
                <p>4. Click the "Reset Password" button in the email.</p>                
                <p>5. Fill in your username and new password.</p>
                <p>6. Click the RESET button.</p>
            </div>
            
            <div>
                <p class="h4 semi-bold mt-3 ms-100">Now try to login again!</p>
            </div>

        </div>
        <div class="col d-flex flex-column text-center mt-4">
            <div class="mb-4">
                <img src="{{ asset('images/user-guide/reset-email.png') }}" alt="Reset Email Image" class="image-border mt-4">
            </div>
            <div>
                <img src="{{ asset('images/user-guide/reset-pass.png') }}" alt="Reset Password Image" class="image-border">
            </div>
        </div>

    </div>
</div>
@endsection