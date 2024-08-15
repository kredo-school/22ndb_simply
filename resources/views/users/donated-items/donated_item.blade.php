@extends('layouts.app')

@section('title', 'Donated item')

<link rel="stylesheet" href="{{asset('css/donated-items.css')}}">
@yield('css')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center mt-4">
    <div class="row justify-content-center w-100">
        <div class="col-md-8 col-8">
            <div class="mt-3 text-center">
                <div class="row  align-items-center">
                    <div class="col">
                        <div class="d-flex justify-content-center align-items-center h1 mt-3 text-center">
                            <i class="fa-solid fa-circle-info ps-1"></i>
                            <p class="mb-0 mx-4">Item's information</p>
                            <div>
                            @if(Auth::user()->id !== $donationItem->user->id)
                                @if($donationItem->isFavorited())
                            <form action="{{ route('favorite.destroy', ['donationItem_id' => $donationItem->id]) }}" method="post" class="mb-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="new-bookmark ms-3"><i class="fa-solid fa-bookmark text-dark"></i></button>
                            </form>
                        @else
                            <form action="{{ route('favorite.store', ['donationItem_id' => $donationItem->id]) }}" method="post" class="mb-0">
                                @csrf
                                <button type="submit" class="new-bookmark ms-3"><i class="fa-regular fa-bookmark"></i></button>
                            </form>
                                 @endif
                            @endif
                            </div>
                            @if(Auth::user()->id === $donationItem->user->id)
                            <a href="{{ route('donated.item.edit', $donationItem->id) }}" class="btn">
                                <i class="fa-solid fa-pen gray" ></i>
                            </a>
                            <div class="tooltip-container">
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#delete-modal">
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
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-4">
                        <div class="mt-3 mb-3 image-container d-flex justify-content-center align-items-center">
                            <img class="image-md-ss" src="{{ $donationItem->item->image }}" alt="{{ $donationItem->item->name }}"/>
                        </div>
                    </div>
                    <div class="col-8 h5 scrollable">
                        <div class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Donation ID</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>{{ $donationItem->id; }}</p>
                                </div>
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
                            @if(Auth::user()->id !== $donationItem->user->id)
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Username</p>
                                </div>
                                <div class="col-6 text-start font-big">
                                    <p class="mb-1"><a href="{{ route('profile.show', ['id' => $donationItem->user->id]) }}" class="text-dark">{{ $donationItem->user->username }}</a> ( {{$donationItem->user->address }} )</p>
                                    <p class="font-small mb-3">You can see donated user's profile!</p>
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Description</p>
                                </div>
                                <div class="col-6 text-start font-big mb-5">
                                    <p>{{ $donationItem->item->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection