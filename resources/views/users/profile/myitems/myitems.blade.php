{{-- Need to change extends blade  later...--}}
@extends('layouts.app')

@section('title', 'My Items')
@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')
<div class="container border mt-0">
    <h4 class="color-gray-1 mb-0 d-inline-block border">My items</h4>     
    <div class="col-md-8 mx-auto">   
        {{-- Tab --}}
        <ul class="nav nav-tabs border-bottom-0 border-dark border">
            <li class="nav-item">
                <a href="{{route('myitems.favorites',['id'=>$user->id])}}" class="nav-tab-link text-decoration-none border border-dark border-bottom-0 py-2 px-4  {{ request()->is('myitems/{id}/favorites') ? 'active' : '' }}">My favorite items</a>
            </li>
            <li class="nav-item">
                <a href="{{route('myitems.donated',['id'=>$user->id])}}" class="nav-tab-link border border-dark border-bottom-0 text-decoration-none py-2 px-4 {{ request()->is('myitems/{id}/donated') ? 'active' : '' }}">My donated items</a>
            </li>
        </ul>
        <div class="tab-content pt-3 small">
            @yield('items-content')
        </div>
    </div>
</div>

@endsection