@extends('layouts.app')

@section('title', 'Welcome to Simply')

@section('content')

<link href="{{ asset('css/index.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('/images/girl.png') }}" alt="{{ asset('/images/girl.png') }}" class="img-fluid image1">
                </div>

                <div class="col-6">
                    <p class="text-center display-6 fw-bold">Let's simplify your item!</p>

                    <p class="text-start h3 mt-5 color-dark-gray under-line">Organize your items</p>
                    <p class="text-start h5 mt-3 mb-5 color-dark-gray">You can register your items with pictures in each category.</p>

                    <p class="text-end h3 mt-5 color-dark-gray under-line">Donate items you don't need</p>
                    <p class="text-end h5 mt-3 color-dark-gray"> 
                        You can donate things you don't need to other users, and you can  also get items that other users have donated.
                    </p>

                    <div class="text-center">
                        <a href="{{ route('register') }}" class="btn btn-dark btn-lg w-50 button">
                        {{ __('Here to Register') }}
                        </a>

                        <p class="text-center mt-1 color-black">
                            Already have an account?<a class="btn btn-link color-black" href="{{ route('login') }}">
                            {{ __('Login') }}</a>
                        </p>
                        
                    </div>
                </div>

                <div class="col-3">
                    <img src="{{ asset('/images/donation.png') }}" alt="{{ asset('/images/donation.png') }}" class="img-fluid image2">
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
