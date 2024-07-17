@extends('layouts.app')

@section('title', 'Show Profile')
@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')
<div class="col-md-8 mx-auto h4 border">
    <div class="container my-5">
        <p class='gray'>Profile</p>
        {{-- Left side --}}
        <div class="row">
            <div class="col-md-6 d-flex align-items-center flex-column my-auto border">
                <div class="mb-5 border">
                    @if($user->avatar)
                        <img src="{{$user->avatar}}" alt="{{$user->name}}" class="rounded-circle avatar-lg">
                    @else
                        <i class="fa-solid fa-circle-user icon-lg"></i>
                    @endif
                </div>
                <div class="col-auto">
                    <div>
                        <a href="" class='text-dark text-decoration-none mb-3'>
                            <i class="fa-solid fa-envelope me-2 mb-3 fa"></i> Direct message
                        </a> 
                    </div>
                    <div>
                        {{--If ur the profile owner, can see items link --}}
                        {{-- @if(Auth::user()->id === $user->id)  --}}
                            <a href="" class='text-dark text-decoration-none'>
                                <i class="fa-solid fa-hand-holding-heart me-2"></i> My items
                            </a>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>

            {{-- Right side --}}
            <div class="col p-5 border">
                {{--If ur the profile owner, can see edit delete icons --}}
                {{-- @if(Auth::user()->id === $user->id)  --}}
                    <div class="d-flex justify-content-end border">
                        <a href="">
                            <i class="fa-solid fa-pen gray"></i>
                        </a>
                        <a href="">
                            <i class="fa-solid fa-trash-can ms-2 gray"></i>
                        </a>
                    </div>
                {{-- @endif --}}

                <table class='table text-start bordered-table border'>
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td>{{$user->username}}</td>
                        </tr>
                        {{-- @if(Auth::user()->id === $user->id)  --}}
                        <tr>
                            <td>Email</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        {{-- @endif --}}
                        <tr>
                            <td >Address</td>
                            <td>{{$user->address}}</td>
                        </tr>
                        <tr>
                            <td class>Introduction</td>
                            <td class="h5">{{$user->introduction}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection