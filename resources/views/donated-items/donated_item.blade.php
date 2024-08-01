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
                            <a href="#" class="btn ms-5 pe-0">
                                <i class="fa-solid fa-pen gray"></i>
                            </a>
                            <button class="btn ms-2 ps-1" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                <i class="fa-solid fa-trash-can gray"></i>
                            </button>
                        </div>
                        {{--Component Delete Modal --}}
                        @component('users.components.deletemodal', [
                            'id' => 'delete-modal',
                            'title' => 'Delete Account',
                            'r2' => '#'
                        ])
                        @slot('body')
                        <p class="h5 mb-2 text-danger">Don't delete this item during dealing.</p>
                        @endslot
                        @endcomponent
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-4">
                        <div class="mt-3 mb-3 image-container">
                            <img class="image-md-ss" src="{{ asset($donationItem->item->image) }}" alt="{{ $donationItem->item->name }}"/>
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
                                    <p class="mb-1"><a href="#" class="text-dark">{{ $donationItem->user->username }}</a> ( {{$donationItem->user->address }} )</p>
                                    <p class="font-small mb-3">You can see donated user's profile!</p>
                                </div>
                            </div>
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