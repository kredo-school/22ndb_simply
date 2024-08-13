@extends('layouts.app')

@section('title', 'Donated item')

<link rel="stylesheet" href="{{asset('css/donated-items.css')}}">
@yield('css')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center mt-4">
    <div class="row justify-content-center w-100">
        <div class="col-9">
            <div class="mt-3 text-center">
                <div class="row h1 align-items-center">
                    <div class="col">
                        <div class="d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-circle-info ps-1"></i>
                            <p class="mb-0 ms-4">Item's information</p>

                            <div class="d-flex ms-2">
                                @if($donationItem->isFavorited())
                                    <form action="{{ route('favorite.destroy', ['donationItem_id' => $donationItem->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bookmark"><i class="fa-solid fa-bookmark text-dark"></i></button>
                                    </form>
                                @else
                                    <form action="{{ route('favorite.store', ['donationItem_id' => $donationItem->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="bookmark"><i class="fa-regular fa-bookmark"></i></button>
                                    </form>
                                @endif
                            </div>

                            @if(Auth::user()->id === $user->id) 
                            <a href="{{ route('donated.item.edit', $donationItem->id) }}" class="btn ms-5 ">
                                <i class="fa-solid fa-pen gray" ></i>
                            </a>
                            <div class="tooltip-container">
                                <button class="btn ps-1" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fa fa-trash-can"></i>
                                    <span class="h5 mb-2 text-danger add">Don't delete this item during dealing.</span>
                                </button>
                            </div>
                            {{-- Component Delete Modal --}}
                            @component('users.components.deletemodal', [
                            'id' => 'delete-modal',
                            'title' => 'Delete Item',
                            'r2' => route('donated.item.destroy', $donationItem->id)
                            ])
                            @slot('body')
                            <p class="h5 text-center">Are you sure you want to delete this item?</p>
                            <p class="h6 text-center" style="color: #9EA6A6;">
                            This item will be permanently deleted from all pages! <br>
                            This cannot be undone.
                            </p>
                            @endslot
                            @endcomponent

                            @endif


                        </div> 
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-4">
                        <div class="mt-3 mb-3 image-container">
                            <img class="image-md-ss" src="{{ $donationItem->item->image }}" alt="{{ $donationItem->item->name }}"/>
                        </div>
                    </div>
                    <div class="col-8 h5 my-auto scrollable">
                        <div class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Donated Date</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>{{ $donationItem->created_at->format('Y/m/d') }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Category</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>{{ $donationItem->item->category->name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Item Name</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>{{ $donationItem->item->name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Username</p>
                                </div>
                                <div class="col-6 text-start font-big">
                                    <p class="mb-1"><a href="{{ route('profile.show', ['id' => $donationItem->user->id]) }}" class="text-dark">{{ $donationItem->user->username }}</a> ( {{$donationItem->user->address }} )</p>
                                    <p class="font-small mb-3">You can see donated user's profile!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Description</p>
                                </div>
                                <div class="col-6 text-start font-big mb-5" style="line-height: 1.5;">
                                    <p>{{ $donationItem->item->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <hr class="custom-hr">
                    <!--Comments -->
                    <div class="mt-4">
                        <form action="{{ route('comment.store', $donationItem->id) }}" method="post">
                            @csrf

                            <div class="input-group">
                                <textarea name="comment_body{{ $donationItem->id }}" cols="20" rows="1" class="form-control form-control-sm comment-box" placeholder="Input your comment here...">{{ old('comment_body' . $donationItem->id) }}</textarea>
                                <button type="submit" class="btn btn-dark btn-md">
                                    Submit
                                </button>
                            </div>
                            <!-- Error -->
                            @error('comment_body' . $donationItem->id)
                            <div class="text-danger small">{{ $message }}</div>
                            @enderror

                        </form>
                        <!-- Show all comments here -->
                        @if($donationItem->comments->isNotEmpty())
                        <ul class="list-group mt-2">
                            @foreach($donationItem->comments as $comment)
                            <li class="list-group-item border-0 bg-white">
                                <div class="d-flex">
                                    <div>
                                        @if($comment->user->avatar)
                                            <img src="{{ $comment->user->avatar }}" alt="User Avatar" class="rounded-circle" width="30" height="30">
                                        @else
                                            <i class="fa-solid fa-circle-user"></i>
                                        @endif
                                        <a href="{{ route('profile.show', $user->id)}}" class="text-decoration-none text-dark fw-bold">
                                            {{ $comment->user->name }}
                                        </a>
                                        
                                        <span class="text-secondary small ms-2">{{ $comment->created_at->format('Y/m/d, h:i A') }}</span>
                                    
                                        @auth
                                            @if(Auth::id() === $comment->user_id)
                                            <form action="{{ route('comment.destroy', $comment->id) }}" method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn" aria-label="Delete Comment"><i class="fa-solid fa-trash-can fa-sm"></i></button>
                                            </form>
                                            @endif
                                        @endauth
                                    </div>
                                </div>
                                <p class="mb-0 text-start">{{ $comment->body }}</p>
                            </li>
                            @endforeach
                            </ul>
                        @endif

                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection