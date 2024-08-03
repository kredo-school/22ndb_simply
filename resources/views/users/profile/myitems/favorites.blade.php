@extends('users.profile.myitems.myitems')

@section('items-content')
    <div class="container">
        <div class="row row-cols-md-3 row-cols-lg-5">
            {{-- @foreach --}}
            
            <div class="col d-flex flex-column border ">
                <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                <div class="catename-icon">
                    <span>category name</span>
                    <i class="fa-solid fa-bookmark"></i>
                </div>
                <span>item name</span>
                <a href="" class="text-dark">username</a>
            </div>
            <div class="col d-flex flex-column">
                <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                <div class="catename-icon">
                    <span>category name</span>
                    <i class="fa-solid fa-bookmark"></i>
                </div>
                <span>item name</span>
                <a href="" class="text-dark">username</a>
            </div>
            <div class="col d-flex flex-column">
                <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                <div class="catename-icon">
                    <span>category name</span>
                    <i class="fa-solid fa-bookmark"></i>
                </div>
                <span>item name</span>
                <a href="" class="text-dark">username</a>
            </div>
            <div class="col d-flex flex-column">
                <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                <div class="catename-icon">
                    <span>category name</span>
                    <i class="fa-solid fa-bookmark"></i>
                </div>
                <span>item name</span>
                <a href="" class="text-dark">username</a>
            </div>
            <div class="col d-flex flex-column">
                <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                <div class="catename-icon">
                    <span>category name</span>
                    <i class="fa-solid fa-bookmark"></i>
                </div>
                <span>item name</span>
                <a href="" class="text-dark">username</a>
            </div>
            <div class="col d-flex flex-column">
                <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                <div class="catename-icon">
                    <span>category name</span>
                    <i class="fa-solid fa-bookmark"></i>
                </div>
                <span>item name</span>
                <a href="" class="text-dark">username</a>
            </div>
        </div> 
    </div>

    {{-- add Pagination link--}}
@endsection