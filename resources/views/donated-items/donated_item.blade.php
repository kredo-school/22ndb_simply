@extends('layouts.app')

@section('title', 'Donated item')

<link rel="stylesheet" href="{{asset('css/donated-items.css')}}">
@yield('css')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="mt-5 text-center">
                <div class="row h1 align-items-center">
                    <div class="col">
                        <p class="text-center"><i class="fa-solid fa-circle-info"></i> Item's information 
                            <span>
                                {{-- @if(Auth::user()->id === $user->id)  --}}
                                    {{-- <p class="d-inline-block ps-4" style="color: #9EA6A6;"> --}}
                                        <a href="{{ route('donated.item.show') }}" class="btn btn-lg">
                                            <i class="fa-solid fa-pen gray"></i>  
                                        </a>
                                        <button class="btn btn-lg" data-bs-toggle="modal" data-bs-target = "#delete-modal">
                                            <i class="fa-solid fa-trash-can gray"></i>
                                        </button>
                                    {{-- </p> --}}
                                {{--Component Delete Modal --}}
                                @component('users.components.deletemodal', [
                                    'id' => 'delete-modal',
                                'title' => 'Delete Account',
                                'r2' => '#'             
                                ])
                                @slot('body')
                                <p class="h5 mb-2 text-danger">Don’t delete this item during dealing.</p>
                                
                                @endslot
                                @endcomponent
                                {{-- @endif      --}}
                            </span>
                        </p> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <div class="mt-5">
                            <img class="image-md-ss" src="{{ asset('images/donation-items closet.jpg') }}" />
                        </div>
                    </div>
                    <div class="col-7 h5 my-auto">
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-5 text-start ms-5">
                                    <p class="font-big">Donated Date</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>xxxx/xx/xx</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start ms-5">
                                    <p class="font-big">Category</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>Closet</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start ms-5">
                                    <p class="font-big">Item Name</p>
                                </div>
                                <div class="col-auto text-start font-big">
                                    <p>Sweatshirt</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start ms-5">
                                    <p class="font-big">Username</p>
                                </div>
                                <div class="col-6 text-start font-big">
                                    <p><a href="#" class="text-dark">Sally</a> (Los Angels)</p>
                                    <p class="font-small mb-2">You can see donated user's profile!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start ms-5">
                                    <p class="font-big">Description</p>
                                </div>
                                <div class="col-6 text-start font-big mb-5">
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
