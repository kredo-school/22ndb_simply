@extends('layouts.app')

@section('title', 'Edit Profile')

@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')
<div class="container h2 ">
    <p class="color-gray-1  mb-0">Edit Profile</p>

    <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="col-md-8 mx-auto ">
            {{-- Left side --}}
            <div class="row ">
                <div class="col-md-6 d-flex align-items-center flex-column my-auto ">
                    <div class="mb-5 ">
                        @if($user->avatar)
                            <img src="{{$user->avatar}}" alt="{{$user->name}}" class="rounded-circle avatar-lg">
                        @else
                            <i class="fa-solid fa-circle-user icon-lg"></i>
                        @endif
                    </div>
                    <div class="col-auto">
                        <input type="file" name="avatar" id="avatar" value="" class=" form-control  form-control-sm mt-1" aria-describedby="avatar-info">
                        <div id="avatar-info" class="form-text xsmall">
                            <p class="mb-0 color-gray-1">Acceptable formats are jpeg, jpg, png and gif only.</p>
                            <p class="mt-0 color-gray-1">Maximum file size is 1048kb.</p>
                        </div>
                        <!-- Error -->
                        @error('avatar')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>                
                </div>
                

                {{-- Right side --}}
                <div class="col-md ">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <textarea name="username" id="username" class="form-control">{{ old('username', $user->username) }}</textarea>

                        <!-- Error -->
                        @error('username')
                        <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <textarea name="email" id="email" class="form-control">{{ old('email', $user->email) }}</textarea>

                        <!-- Error -->
                        @error('email')
                        <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label ">Address</label>
                        <textarea name="address" id="address" class="form-control">{{ old('address', $user->address) }}</textarea>

                        <!-- Error -->
                        @error('address')
                        <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="introduction" class="form-label ">Description</label>
                        <textarea name="introduction" id="introduction" class="form-control text-intro">{{ old('introduction', $user->introduction) }}</textarea>

                        <!-- Error -->
                        @error('introduction')
                        <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Btn --}}
                    <div class="mb-3 d-flex justify-content-center">
                        @include('users.components.btn', [
                            'r' => route('profile.show', $user->id),
                            'color' => 'dark', 
                            'name' => 'Update'
                        ])
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection