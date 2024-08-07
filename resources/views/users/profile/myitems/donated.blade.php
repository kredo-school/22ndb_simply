@extends('users.profile.myitems.myitems')

@section('items-content')
    <div class="container">
        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            @forelse($donatedItems as $donatedItem)
                <div class="col d-flex flex-column align-items-center mb-3 h6">
    {{-- Add image link --}}
                        <a href="">
                            <img src="{{$donatedItem->item->image}}" alt="{{$donatedItem->item->name}}" class="img-item-md mb-3">
                        </a>
                        <span>{{$donatedItem->item->name}}</span>
                </div>
            @empty
                <p class="h6 color-gray-1">Donated items list...</p>
            @endforelse
        </div>
    </div>
@endsection