@extends('layouts.app')

@section('title', 'My item')

<link rel="stylesheet" href="{{ asset('/css/my_item.css') }}">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <div class="mt-5 text-center">
                <div class="row h1 align-items-center">
                    <div class="col">
                        <p class="d-inline-block me-3"><i class="fa-solid fa-circle-info"></i> Item's information</p>
                        <span><a data-bs-toggle="modal" data-bs-target="#" class="btn text-decoration-none"><i class="fa-solid fa-pen e-d-icon"></i></a></span>
                        <span><a data-bs-toggle="modal" data-bs-target="#" class="btn text-decoration-none"><i class="fa-solid fa-trash-can e-d-icon"></i></a></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="item-img-box border border-dark mt-5">
                        <img class="item-img" src="{{ asset('/storage/assets/denim-pants.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-9 h5 my-auto">
                        <div class="mt-5">
                            <div class="row">
                                <div class="col text-end">
                                    <p class="r-date">Registered Date</p>
                                </div>
                                <div class="col text-start">
                                    <p>xxxx/xx/xx</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <p class="category-name">Category</p>
                                </div>
                                <div class="col text-start">
                                    <p>Closet</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <p class="item-name">Item Name</p>
                                </div>
                                <div class="col text-start">
                                    <p>Denim Pants</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <p class="description">Description</p>
                                </div>
                                <div class="col text-start">
                                    <p>I wore this shirt only one time. It's almost new!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <p class="donation">Donation</p>
                                </div>
                                <div class="col text-start">
                                    <i class="fa-regular fa-square-check"></i>
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