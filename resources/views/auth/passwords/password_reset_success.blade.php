@extends('layouts.app')

@section('title', 'Password Reset Success')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top: 100px;">         
            <div class="mt-4 text-center">
                <div class="row mb-5">
                    <p class="h1"><i class="fa-solid fa-circle-check"></i> Success</p>
                </div>
                <div class="row mb-5">
                    <p class="h2 color-gray-1">Your password has been changed successfully!</p>
                </div>
                   
                <div class="row mb-4">
                    <div class="col-md-4 mx-auto">
                        <a href="{{ route('login') }}" class="btn btn-dark btn-lg w-100 button2">
                            {{ __('Here to Login') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
