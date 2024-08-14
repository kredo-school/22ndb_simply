@extends('layouts.user-guide')

@section('title', 'User Guide Edit Item')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">Edit your item &nbsp;<i class="fa-solid fa-pen"></i></h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center" style="margin-top: 60px; margin-left:100px;">                
                <p class="mb-5">1. Go to the Edit item page from <br>&emsp;each item page.</p>
                <p class="mb-5">2. Modify your item's information.</p>
                <p>3. Click the UPDATE button.</p>
            </div>

        </div>
        <div class="col d-flex align-items-center">
            <img src="{{ asset('images/user-guide/edit.png')}}" alt="Edit Item Image" class="image-border mx-auto mt-5">
        </div>
    </div>
</div>
@endsection