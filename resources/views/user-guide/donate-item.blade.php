@extends('layouts.user-guide')

@section('title', 'User Guide Donate Item')

@section('content')
<div class="conatiner">
    <div class="row">
        <div class="col p-0">
            <h2 class="mt-5 ms-4 fw-bold">How to donate your item ?</h2>

            <div class="col d-flex flex-column justify-content-center mt-5" style="margin-left:80px;">                
                <p class="mb-5">1. Go to the add item / edit item page.</p>
                <p class="mb-5">2. Check the box next to “Donation”</p>
                <p>3. Click the SAVE or  UPDATE button.</p>
            </div>
            
            <div>
                <p class="h4 semi-bold mt-5" style="margin-left: 54px; line-height: 1.6;">You can see  all your donation items on the  profile page.</p>
            </div>

        </div>
        <div class="col d-flex align-items-center p-0">
            <img src="{{ asset('images/user-guide/donated-item.png')}}" alt="Donate Item Image" class="image-border mx-auto my-3">
        </div>
    </div>
</div>
@endsection