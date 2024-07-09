@extends('layouts.app')

@section('title', 'Show Profile')

@section('content')
<div class="container border">
    <p class='text-secondary'>Profile</p>
    {{-- Left side --}}
    <div class="row">
        <div class="col-6 p-3 border">
            <div class='text-center'>
                <img src="" alt="username" class="rounded-circle avatar-md">
                    {{-- <i class="fa-solid fa-circle-user icon-md"></i> --}}
            </div>
            <div class='border ms-5'>
                <div>
                    <a href="" class='text-dark text-decoration-none'>
                        <i class="fa-solid fa-envelope"></i> Direct message
                    </a> 
                </div>
                <div>
                    {{--If ur the profile owner, can see items link @if Auth::user --}}
                    <a href="" class='text-dark text-decoration-none'>
                        <i class="fa-solid fa-hand-holding-heart"></i> My items
                    </a>
                </div>
            </div>
        </div>

        {{-- Right side --}}
        <div class="col border p-3">
            {{--If ur the profile owner, can see edit delete icons @if Auth::user --}}
            <div class="text-secondary d-flex justify-content-end">
                <i class="fa-solid fa-pen"></i>
                <i class="fa-solid fa-trash-can ms-2"></i>
            </div>
            <div class="border-bottom border-dark">
                <p>Username</p>
                <p>Ami</p>

            </div>
            <div class="border-bottom border-dark">
                <p>Email</p>

            </div>
            <div class="border-bottom border-dark">
                <p>Address</p>

            </div>
            <div class="border-bottom border-dark">
                <p>Description</p>

            </div>
        </div>
    </div>
</div>
@endsection