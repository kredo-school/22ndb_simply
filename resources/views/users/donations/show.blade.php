@extends('layouts.app')

@section('title', 'Show Donation Item')

@section('content')

<div class="container mt-3">
    <h3 class="text-center">
        <i class="fas fa-info-circle"></i> Item's information
        <span>
            <button class="btn border-0 ms-3"><i class="fas fa-pen text-secondary pen-icon"></i></button>
            <button class="btn border-0 m-0"><i class="fas fa-trash-alt text-secondary trash-icon"></i></button>
        </span>
    </h3>

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

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <form action="#" method="post">
            @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-size" placeholder="Input your comment here">
                    <button class="btn btn-dark ms-3" type="button">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-8">
            <div class="comment mt-3">
                <div class="d-flex align-items-start mb-3">
                    <i class="fas fa-user-circle fa-2x mr-2 me-2"></i>
                        <div class="font-weight-bold"><a href="#">Username</a>
                            <span class="text-muted small ms-2">2024.07.09 22:50</span>
                            <button class="btn-secondary border-0" data-bs-toggle="modal" data-bs-target="#delete-comment"><i class="fas fa-trash-alt border-0 text-muted small"></i></button>
                        </div>
                </div>
            </div>
            <div class="comment">
                <div class="d-flex align-items-start mb-3">
                    <p>When did you buy it?</p>
                </div>
            </div>
        </div>

@include('users.donations.modal.delete')
@endsection
