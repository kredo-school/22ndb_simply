{{-- Need to change extends blade  later...--}}
@extends('layouts.app')

@section('title', 'My Items')
@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')

<div class="col-md-8 mx-auto">
    <div class="container my-5">
        <h4 class="mb-3 color-gray-1">My items</h4>
        {{-- Tab --}}
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <a href="{{route('profile.favorites')}}" class="nav-link{{request()->is('profile/myitems/favorites') ? 'active' : ''}}">My favorite items</a>
            </li>
            <li class="nav-item">
                <a href="{{route('profile.donated')}}" class="nav-link{{request()->is('profile/myitems/donated') ? 'active' : ''}}">My donated items</a>
            </li>
        </ul>
        <div class="tab-content">
            @yield('items-content')
        </div>
    </div>
</div>
@endsection