@extends('users.profile.myitems.myitems')

@section('items-content')
    <div class="container">

        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            {{-- add @foreach --}}
            @forelse($favoriteItems as $favoriteItem)
                <div class="col d-flex flex-column align-items-center h6 item-box ">
                    <div class="align-items-start ">
    {{-- Add image link --}}
                        @if($favoriteItem->donationItem->item->image)
                            <a href="{{route('donated.item.show',$favoriteItem->donationItem->id)}}">
                                <img src="{{$favoriteItem->donationItem->item->image}}" alt="{{$favoriteItem->donationItem->item->name}}" class="img-item-md">
                            </a>
                        @else
                            <div class="no-image"></div>
                        @endif
                        <div class="d-flex justify-content-between">
                            <span class="color-gray-1 my-auto">Donation ID  {{$favoriteItem->donationItem->id}}</span>
                                @if($favoriteItem->donationItem->isFavorited())
                                    <form action="{{ route('favorite.destroy', ['donationItem_id' => $favoriteItem->donationItem->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn shadow-none p-0"><i class="fa-solid fa-bookmark text-dark"></i></button>
                                    </form>
                                @else
                                    <form action="{{ route('favorite.store', ['donationItem_id' => $favoriteItem->donationItem->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn shadow-none p-0"><i class="fa-regular fa-bookmark"></i></button>
                                    </form>
                                @endif
                        </div>
                        <span>{{$favoriteItem->donationItem->item->name}}</span>
    {{-- Add username link --}}
                        <div class="text-starts">
                            <a href="{{route('profile.show', ['id'=>$favoriteItem->donationItem->item->user->id])}}" class="text-dark">{{$favoriteItem->donationItem->item->user->username}}</a>
                        </div>
                        <p>Favorite Item User ID: {{ $favoriteItem->donationItem->item->user->id }}</p>

                    </div>
                </div>
            @empty
                <p class="h6 color-gray-1">Favorite items list...</p>
            @endforelse

        </div> 
    </div>

     <!-- Pagination Controls -->
     <div class="d-flex justify-content-center">
        {{ $favoriteItems->links('pagination.pagination') }}
    </div>
@endsection