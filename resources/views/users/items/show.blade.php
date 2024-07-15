@extends('layouts.app')

@section('title', 'Show My Item')

@section('content')

<div class="container mt-3">
    <div class="row">
        <h3 class="text-center">
            <i class="fas fa-info-circle"></i> My Item's information
            <span>
                <button class="btn border-0 ms-3"><i class="fa-solid fa-pen pen-icon text-secondary"></i></button>
                <button class="btn border-0" data-bs-toggle="modal" data-bs-target="#delete-item"><i class="fas fa-trash-alt trash-icon text-secondary"></i></button>
            </span>
        </h3>
    </div>

    <div class="row d-flex justify-content-center mt-3">
        <div class="col-4 text-center">
            <div class="icon-wrapper mt-5">
                {{-- @if($user->item->image)
                    <img src="#" alt="itemImage">
                @else --}}
                    <i class="fa-solid fa-image itemImage mt-4"></i>
                {{-- @endif --}}
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-3 mt-4 ms-3">
                    <p class="mt-3"><strong>Donated Date</strong></p>
                </div>
                <div class="col-auto mt-4">
                    <p class="mt-3">2023.9.10</p>
                </div>
            </div>

            <div class="row">
                <div class="col-3 mt-3 ms-3">
                    <p class="mt-3"><strong>Category</strong></p>
                </div>
                <div class="col-auto mt-3">
                    <p class="mt-3">Closet</p>
                </div>
            </div>

            <div class="row">
                <div class="col-3 mt-3 ms-3">
                    <p class="mt-3"><strong>Item name</strong></p>
                </div>
                <div class="col-auto mt-3">
                    <p class="mt-3">Sweatshirt</p>
                </div>
            </div>

            <div class="row">
                <div class="col-3 mt-3 ms-3">
                    <p class="mt-3"><strong>Description</strong></p>
                </div>
                <div class="col-auto mt-3">
                    <p class="mt-3">I wore this shirt only one time. It's almost new!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('users.items.modal.delete')

@endsection
