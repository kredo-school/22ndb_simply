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
                        {{-- @if(Auth::user()->id === $user->id)  --}}
                        {{-- <p class="d-inline-block ps-4" style="color: #9EA6A6;">
                            <i class="fa-solid fa-pen"></i> <i class="fa-solid fa-trash-can"></i>
                        </p> --}}
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-lg">
                                <i class="fa-solid fa-pen gray"></i>  </a>
                                <button class="btn btn-lg" data-bs-toggle="modal" data-bs-target = "#delete-modal">
                                    <i class="fa-solid fa-trash-can gray"></i>
                                </button>
                                {{--Component Delete Modal --}}
                                @component('users.components.deletemodal', [
                                    'id' => 'delete-modal',
                                'title' => 'Delete Account',
                                'r2' => '#'             
                                ])
                                @slot('body')
                                <p class="h5 mb-2">Are you sure you want to delete this account?</p>
                                <p class="h6 text-danger">All your data will be permanently deleted!</p>
                                <p class="h6 text-danger">This cannnot be undone.</p>
                                @endslot
                                @endcomponent
                            </div>
                        {{-- @endif --}}     
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="mt-5" style="height: 300px; width: 300px;">
                            <img class="image-md-lg" src="{{ asset('images/donation-items closet.jpg') }}" />
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
                                    <p class="mb-1"><a href="#" class="text-dark">Sally</a> (Los Angels)</p>
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
