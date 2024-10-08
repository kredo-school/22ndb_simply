@extends('users.profile.myitems.myitems')

@section('items-content')
    <div class="container">
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            @forelse($donatedItems as $donatedItem)
                <div class="col d-flex flex-column align-items-center item-box">
                    @if($donatedItem->item->image)
                        <a href="{{route('donated.item.show',$donatedItem->id)}}">
                            <img src="{{$donatedItem->item->image}}" alt="{{$donatedItem->item->name}}" class="img-item-md">
                        </a>
                    @else
                        <div class="no-image"></div>
                    @endif
                    <div class="text-start">
                        <span class="pt-0">Donation ID {{$donatedItem->item->id}}</span><br>
                        <span>{{$donatedItem->item->name}}</span>
                    </div>
                </div>
            @empty
                <p class="h6 color-gray-1">Donated items list...</p>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $donatedItems->links('pagination.pagination') }}
    </div>
@endsection