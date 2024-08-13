    {{-- Need to change extends blade  later...--}}
    @extends('layouts.app')

    @section('title', 'Show Profile')
    @section('css')
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    @endsection

    @section('content')
<div class="container h2">
    <p class='color-gray-1 mb-0 '>Profile</p>
    <div class="col-md-8 mx-auto h2 ">
    {{-- Frash message --}}
        @if(session('success'))
            <div class="alert alert-dark">
                {{session('success')}}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
            {{-- Left side --}}
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 d-flex align-items-center flex-column my-auto ">
                    <div class="text-center">
                        <div class="mb-5">
                            @if($item_user->avatar)
                                <img src="{{$item_user->avatar}}" alt="{{$item_user->username}}" class="rounded-circle avatar-lg">
                            @else
                                <i class="fa-solid fa-circle-user icon-lg"></i>
                            @endif
                        </div>
                        <div class="col-auto text-start">
                            <a href="{{ route('directMessage.show', $item_user->id) }}" class='text-dark text-decoration-none mb-3'>
                                <i class="fa-solid fa-envelope me-2 mb-3 fa"></i> Direct message
                            </a><br>
                            {{--If ur the profile owner, can see items link --}}
                            @if(Auth::user()->id === $item_user->id) 
                                <a href="{{route('profile.myitems',['id'=>$item_user->id])}}" class='text-dark text-decoration-none'>
                                    <i class="fa-solid fa-hand-holding-heart me-2"></i> My items
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Right side --}}
                <div class="col-md">
                    {{--If ur the profile owner, can see edit delete icons --}}
                    @if(Auth::user()->id === $item_user->id)
                        <div class="d-flex justify-content-end">
                            <a href="{{route('profile.edit')}}" class="btn">
                                <i class="icon fa-solid fa-pen color-gray-1"></i>
                            </a>
                            <button class="btn" data-bs-toggle="modal" data-bs-target = "#delete-modal">
                                <i class="icon fa-solid fa-trash-can color-gray-1"></i>
                            </button>

                            {{--Component Delete Modal --}}
                            @component('users.components.deletemodal', [
                                'id' => 'delete-modal',
                                'title' => 'Delete Account',
                                'r2' => route('profile.destroy', $item_user->id)
                                ])
                                @slot('body')
                                    <p class="h5 mb-2">Are you sure you want to delete this account?</p>
                                    <p class="h6 text-danger">All your data will be permanently deleted!</p>
                                    <p class="h6 text-danger">This cannnot be undone.</p>
                                @endslot
                            @endcomponent
                        </div>
                    @endif

                    <table class='table text-start bordered-table'>
                        <tbody>
                            <tr>
                                <td>Username</td>
                                <td>{{$item_user->username}}</td>
                            </tr>
                        @if(Auth::user()->id === $item_user->id)
                            <tr>
                                <td>Email</td>
                                <td>{{$item_user->email}}</td>
                            </tr>
                        @endif
                            <tr>
                                <td >Address</td>
                                <td>{{$item_user->address}}</td>
                            </tr>
                            <tr>
                                <td class>Introduction</td>
                                <td class="h4">{{$item_user->introduction}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
@endsection
