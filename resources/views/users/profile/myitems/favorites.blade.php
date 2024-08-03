@extends('users.profile.myitems.myitems')

@section('items-content')
    <div class="container">
        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5">

            {{-- add @foreach --}}
            <div class="col d-flex flex-column align-items-center border mb-3 h6">
                <div class="align-items-start border">
                    <a href="">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                    </a>
                    <div class="mt-1">
                        <span class="color-gray-1">category name</span>
                        &nbsp;
                        <i class="fa-solid fa-bookmark"></i>
                    </div>
                    <span>item name</span>
                    <div class="">
                        <a href="" class="text-dark">username</a>
                    </div>
                </div>
            </div>

            <div class="col d-flex flex-column align-items-center border mb-3 h6">
                <div class="align-items-start border">
                    <a href="">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                    </a>
                    <div class="mt-1">
                        <span class="color-gray-1">category name</span>
                        &nbsp;
                        <i class="fa-solid fa-bookmark"></i>
                    </div>
                    <span>item name</span>
                    <div class="">
                        <a href="" class="text-dark">username</a>
                    </div>
                </div>
            </div>

            <div class="col d-flex flex-column align-items-center border mb-3 h6">
                <div class="align-items-start border">
                    <a href="">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                    </a>
                    <div class="mt-1">
                        <span class="color-gray-1">category name</span>
                        &nbsp;
                        <i class="fa-solid fa-bookmark"></i>
                    </div>
                    <span>item name</span>
                    <div class="">
                        <a href="" class="text-dark">username</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center border mb-3 h6">
                <div class="align-items-start border">
                    <a href="">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md">
                    </a>
                    <div class="mt-1">
                        <span class="color-gray-1">category name</span>
                        &nbsp;
                        <i class="fa-solid fa-bookmark"></i>
                    </div>
                    <span>item name</span>
                    <div class="">
                        <a href="" class="text-dark">username</a>
                    </div>
                </div>
            </div>

        </div> 
    </div>
@endsection