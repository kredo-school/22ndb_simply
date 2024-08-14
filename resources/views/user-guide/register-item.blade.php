@extends('layouts.user-guide')

@section('title', 'User Guide Register Item')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">Let's register your item !</h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center" style="margin-top: 50px; margin-left:100px;">                
                <p class="mb-5">1. Go to the Add item page.</p>
                <p class="mb-5">2. Fill in your item information.</p>
                <p>3. Click the SAVE button.</p>
            </div>
            
            <div>
                <p class="h4 mt-4 semi-bold" style="margin-left:70px; line-height: 1.6;">Now you can see your item <br>in your page.</p>
            </div>

        </div>
        <div class="col d-flex align-items-center">
            <img src="{{ asset('images/user-guide/add-item.png') }}" alt="Register Item Image" class="image-border mx-auto">
        </div>
    </div>
</div>
@endsection
