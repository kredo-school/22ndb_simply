@extends('layouts.app')

@section('title', 'My item')

<link rel="stylesheet" href="{{ asset('/css/my_item.css') }}">

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
                            <a href="{{ route('item.edit') }}" class="btn ms-5 pe-0">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <button class="btn ms-2 ps-1" data-bs-toggle="modal" data-bs-target="#delete-item">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @include('users.items.modal.delete')

                <div class="row mt-5">
                    <div class="col-4">
                        <div class="mt-3 mb-3 image-container">
                            <img class="image-md-ss" src="{{ $item->image }}" alt="{{ $item->name }}"/>
                        </div>
                    </div>
                    <div class="col-8 h5 my-auto scrollable">
                        <div class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Donated Date</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>{{ $item->created_at->format('Y/m/d') }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Category</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>{{ $item->category->name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Item Name</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>{{ $item->name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Description</p>
                                </div>
                                @if($item->description)
                                <div class="col-6 text-start font-big">
                                    <p>{{ $item->description }}</p>
                                </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-4 text-start ms-5">
                                    <p class="font-big">Donation</p>
                                </div>
                                @if($item->isDonated())
                                <div class="col-auto text-start font-big">
                                    <i class="fa-regular fa-square-check"></i>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection