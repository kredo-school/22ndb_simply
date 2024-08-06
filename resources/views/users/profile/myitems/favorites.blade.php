@extends('users.profile.myitems.myitems')

@section('items-content')
    <div class="container">

        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            {{-- add @foreach --}}
            @foreach($favoriteItems as $favoriteItem)
            <div class="col d-flex flex-column align-items-center mb-3 h6">
                <div class="align-items-start ">
{{-- Add image link --}}
                    <a href="">
                        <img src="{{$favoriteItem->donationItem->item->image}}" alt="{{$favoriteItem->donationItem->item->name}}" class="img-item-md">
                    </a>
                    <div class="mt-1 d-flex justify-content-between">
                        <span class="color-gray-1">{{$favoriteItem->donationItem->item->category->name}}</span>
                        &nbsp;
                        <i class="fa-solid fa-bookmark"></i>
                    </div>
                    <span>{{$favoriteItem->donationItem->item->name}}</span>
{{-- Add username link --}}
                    <div class="">
                        <a href="" class="text-dark">{{$favoriteItem->donationItem->item->user->username}}</a>
                    </div>
                </div>
            </div>
            @endforeach

            
        </div> 
    </div>
@endsection