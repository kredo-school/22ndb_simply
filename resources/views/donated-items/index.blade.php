@extends('layouts.app')

@section('title', 'Donated Items')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/donated-items.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="title">Donated Items</h1>
    </div>
        {{-- @forelse($category->item->take(4) as $item) --}}
        <div class="row">
            <div class="col grid-item">
                <a href="#">
                    <img class="grid-photo" src="{{ asset('images/donation-items closet.jpg') }}" />
                </a>
                <div style="display: flex; justify-content: space-between;">
                    <div class="grid-text">
                        <p>2023/02/02</p>
                         <p>Nagoya</p>
                    </div>
                    <div>
                        <button class="bookmark"><i class="fa-solid fa-bookmark"></i></button>
                    </div>
                </div>
            </div>
            <div class="col grid-item">
                <a href="#">
                    <img class="grid-photo" src="{{ asset('images/donation-items closet.jpg') }}" />
                </a>
                <div style="display: flex; justify-content: space-between;">
                    <div class="grid-text">
                        <p>2023/02/02</p>
                         <p>Nagoya</p>
                    </div>
                    <div>
                        <button class="bookmark"><i class="fa-solid fa-bookmark"></i></button>
                    </div>
                </div>
            </div>
            <div class="col grid-item">
                <a href="#">
                    <img class="grid-photo" src="{{ asset('images/donation-items closet.jpg') }}" />
                </a>
                <div style="display: flex; justify-content: space-between;">
                    <div class="grid-text">
                        <p>2023/02/02</p>
                         <p>Nagoya</p>
                    </div>
                    <div>
                        <button class="bookmark"><i class="fa-solid fa-bookmark"></i></button>
                    </div>
                </div>
            </div>
            <div class="col grid-item">
                <a href="#">
                    <img class="grid-photo" src="{{ asset('images/donation-items closet.jpg') }}" />
                </a>
                <div style="display: flex; justify-content: space-between;">
                    <div class="grid-text">
                        <p>2023/02/02</p>
                         <p>Nagoya</p>
                    </div>
                    <div>
                        <button class="bookmark"><i class="fa-solid fa-bookmark"></i></button>
                    </div>
                </div>
            </div>
            <div class="col grid-item">
                <a href="#">
                    <img class="grid-photo" src="{{ asset('images/donation-items closet.jpg') }}" />
                </a>
                <div style="display: flex; justify-content: space-between;">
                    <div class="grid-text">
                        <p>2023/02/02</p>
                         <p>Nagoya</p>
                    </div>
                    <div>
                        <button class="bookmark"><i class="fa-solid fa-bookmark"></i></button>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection


