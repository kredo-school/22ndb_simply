@extends('layouts.user-guide')

@section('title', 'User Guide Add Category')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">If you want to create your own category...</h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center category-spacing">                
                <p class="mb-5">1. Go to the Add category page.</p>
                <p class="mb-5">2. Fill in new category name.</p>
                <p>3. Click the SAVE button.</p>
            </div>
            
            <div>
                <p class="h4 semi-bold mt-4 line-height ms-100">Also you can edit and <br>delete your categories here!</p>
            </div>
 
        </div>
        <div class="col d-flex flex-column align-items-center mt-3">
            <img src="{{ asset('images/user-guide/create-category.png') }}" alt="Add category Image" class="image-border mt-4 p-3">
        </div>

    </div>
</div>
@endsection