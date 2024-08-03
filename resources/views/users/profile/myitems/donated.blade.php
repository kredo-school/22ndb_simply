@extends('users.profile.myitems.myitems')

@section('items-content')
    <div class="container">
        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            {{-- add @foreach --}}
            <div class="col d-flex flex-column align-items-center border mb-3 h6">
                    <a href="">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item-md mb-3">
                    </a>
                    <span>item name</span>
            </div>
        </div>
    </div>
@endsection