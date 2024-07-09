@extends('layouts.app')

@section('title', 'Show Profile')

@section('content')
<div class="container border">
    <p class='text-secondary'>Profile</p>
    {{-- Left side --}}
    <div class="row">
        <div class="col-6 p-3 border">
            <div class='text-center'>
                @if($user->avatar)
                    <img src="{{$user->avatar}}" alt="{{$user->name}}" class="rounded-circle avatar-lg">
                @else
                    <i class="fa-solid fa-circle-user icon-lg"></i>
                @endif
            </div>
            <div class='border ms-5'>
                <div>
                    <a href="" class='text-dark text-decoration-none'>
                        <i class="fa-solid fa-envelope"></i> Direct message
                    </a> 
                </div>
                <div>
                    {{--If ur the profile owner, can see items link --}}
                    @if(Auth::user()->id === $user->id) 
                        <a href="" class='text-dark text-decoration-none'>
                            <i class="fa-solid fa-hand-holding-heart"></i> My items
                        </a>
                    @endif
                </div>
            </div>
        </div>

        {{-- Right side --}}
        <div class="col border p-3">
            {{--If ur the profile owner, can see edit delete icons --}}
            @if(Auth::user()->id === $user->id) 
                <div class="text-secondary d-flex justify-content-end">
                    <i class="fa-solid fa-pen"></i>
                    <i class="fa-solid fa-trash-can ms-2"></i>
                </div>
            @endif

            <table class='table text-start'>
                <tbody>
                    <tr>
                        <td>Username</td>
                        <td>{{$user->username}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{$user->address}}</td>
                    </tr>
                    <tr>
                        <td>Introduction</td>
                        <td>{{$user->introduction}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection