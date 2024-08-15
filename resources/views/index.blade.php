@extends('layouts.app')

@section('title', 'Welcome to Simply')

@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
{{-- Flash message for delete acocunt --}}
<script>
    @if (session('message'))
        $(function () {
                toastr.success('{{ session('message') }}');
        });
    @endif
</script>


<div class="container">
    <div class="row">
            <p class="index-title">Let's simplify your item!</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('/images/girl.png') }}" alt="{{ asset('/images/girl.png') }}" class="img-fluid image1">
                </div>
                <div class="col-6 p-0">                   
                    <p class="text-start sub-title">Organize your items</p>
                    <p class="text-start explanation">You can register your items with pictures in each category.</p>

                    <p class="text-end sub-title">Donate items you don't need</p>
                    <p class="text-end explanation"> 
                        You can donate things you don't need to other users, and you can  also get items that other users have donated.
                    </p>

                    <div class="text-center">
                        <a href="{{ route('register') }}" class="btn btn-dark btn-lg w-50 button">
                        {{ __('Here to Register') }}
                        </a>

                        <p class="text-center mt-1 semi-bold">
                            Already have an account?<a class="btn btn-link text-dark semi-bold" href="{{ route('login') }}">
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
