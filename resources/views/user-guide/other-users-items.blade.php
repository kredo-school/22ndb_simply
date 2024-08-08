@extends('layouts.user-guide')

@section('title', 'User Guide Register Account')

@section('content')
<h2 class="mt-4 ms-3 fw-bold">Let's register your account !</h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center" style="margin-top: 20px; margin-left:100px;">                
                <p>1. Go to the Donation page</p>
                <p>2. You can find other user's donated <br>&emsp;items here.</p>
                <p>3. Click username to jump to the <br>&emsp;owner's profile page.</p>
                <p>4. Click the Envelope icon.</p>
                <p class="mb-2">5. Ask your questions or arrange  how <br>&emsp;to give/get the item through direct <br>&emsp;message.</p>
                <p class="text-danger" style="line-height: 1.3;">&emsp;Please include "Donation Item ID" <br>&emsp;when sending a message to the <br>&emsp;owner for the first time.</p>
            </div>
            
            <div>
                
            </div>

        </div>
        <div class="col d-flex align-items-center">
            <img src="#" alt="To Get Donation Image" class="image-border mx-auto mt-5">
        </div>
    </div>
</div>
@endsection