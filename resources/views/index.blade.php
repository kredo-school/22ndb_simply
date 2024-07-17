@extends('layouts.app')

@section('title', 'Welcome to Simply')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('/images/girl.png') }}" alt="{{ asset('/images/girl.png') }}" class="img-fluid" style="object-fit: cover; border: none; width: 95%; height: auto; margin-top: 50px;">
                </div>

                <div class="col-6">
                    <p class="text-center display-6" style="font-weight: bold;">Let's simplify your item!</p>

                    <p class="text-start fw-bold h3 mt-5" style="color: #7B7A7A; text-decoration: underline;">Organize your items</p>
                    <p class="text-start fw-bold h5 mt-3 mb-5" style="color: #7B7A7A;">You can register your items with pictures in each category.</p>

                    <p class="text-end fw-bold h3 mt-5" style="color: #7B7A7A; text-decoration: underline;">Donate items you don't need</p>
                    <p class="text-end fw-bold h5 mt-3" style="color: #7B7A7A;"> 
                        You can donate things you don't need to other users, and you can  also get items that other users have donated.
                    </p>

                    <div class="text-center" style="margin-top: 70px;">
                        <a href="{{ route('register') }}" class="btn btn-dark btn-lg w-50" style="border-radius: 5px;">
                        {{ __('Here to Register') }}
                        </a>

                        <p class="text-center mt-1" style="color: #050606;">
                            Already have an account?<a class="btn btn-link" href="{{ route('login') }}"  style="color: #050606;">
                            {{ __('Login') }}</a>
                        </p>
                        
                    </div>
                </div>

                <div class="col-3" style="margin-top: 200px;">
                    <img src="{{ asset('/images/donation.png') }}" alt="{{ asset('/images/donation.png') }}" class="img-fluid" style=" object-fit: cover; border: none; width: 85%; height: auto;">
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
