@extends('layouts.app')

@section('title', 'Donated item')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <div class="mt-5 text-center">
                <div class="row h1 align-items-center">
                    <div class="col">
                        <p class="d-inline-block"><i class="fa-solid fa-circle-info"></i> Item's information</p>
                        <p class="d-inline-block ps-4" style="color: #9EA6A6;">
                            <i class="fa-solid fa-pen"></i> <i class="fa-solid fa-trash-can"></i>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="border border-dark mt-5" style="border-radius: 30px; height: 300px; width: 300px;">
                        </div>
                    </div>
                    <div class="col-9 h5 my-auto">
                        <div class="mt-5">
                            <div class="row">
                                <div class="col text-end">
                                    <p style="color: #9EA6A6;">Donated Date</p>
                                </div>
                                <div class="col text-start">
                                    <p>xxxx/xx/xx</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <p style="color: #9EA6A6;">Category</p>
                                </div>
                                <div class="col text-start">
                                    <p>Closet</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <p style="color: #9EA6A6;">Item Name</p>
                                </div>
                                <div class="col text-start">
                                    <p>Sweatshirt</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <p style="color: #9EA6A6;">Username</p>
                                </div>
                                <div class="col text-start">
                                    <p class="mb-1">Sally (Los Angels)</p>
                                    <p class="h6" style="color: #9EA6A6;">You can see donated user's profile!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <p style="color: #9EA6A6;">Description</p>
                                </div>
                                <div class="col text-start">
                                    <p>I wore this shirt only one time. It's almost new!</p>
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
