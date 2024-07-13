@extends('layouts.app')

@section('title', 'Edit Profile')

@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')
<div class="col-md-8 mx-auto h4 border">
    <form action="" method="post" class="" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="container my-5">
            <p class='text-secondary'>Edit Profile</p>
            {{-- Left side --}}
            <div class="row">
                <div class="col-md-6 d-flex align-items-center flex-column my-auto border">
                    <div class="border">
                        @if($user->avatar)
                            <img src="{{$user->avatar}}" alt="{{$user->name}}" class="rounded-circle avatar-lg">
                        @else
                            <i class="fa-solid fa-circle-user icon-lg"></i>
                        @endif
                    </div>
                    <div class="col-auto border">
                        <input type="file" name="avatar" id="avatar" value="" class="form-control form-control-sm mt-1" aria-describedby="avatar-info">
                        <div id="avatar-info" class="form-text xsmall">
                            Accetable formats are jpeg, jpg, png, and,gif only. <br>
                            max file size is 1048kb.
                        </div>
                        <!-- Error -->
                        @error('avatar')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>                
                </div>
                

                {{-- Right side --}}
                <div class="col p-5 border">
                    <div class="mb-3">
                        <label for="username" class="form-label h6">Username</label>
                        <input type="text" name="username" id="username"class="form-control" value="{{ old('username', $user->username) }}" autofocus>
                        <!-- Error -->
                        @error('username')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                        
    
                    </div> 

                    
                </div>
            </div>
        </div>
    </form>
</div>
@endsection