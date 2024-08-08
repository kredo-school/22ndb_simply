@extends('layouts.app')

@section('title', 'each_category')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/each_category.css') }}">

<div class="body">
    <div class="main mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="pagename ps-2 pb-2">{{ $category->name }}</h2>
                </div>
                <div class="col-sm-6 text-end pe-3 my-auto">
                    <h6 class="donated-icon"><i class="fa-solid fa-hand-holding-heart"></i> ...Donated Item</h6>
                </div>
            </div> 
            
            <div class="container-small">
                <div class="row row-cols-5">
                @foreach($category_items as $item)
                <div class="item-box mb-3">
                    <a href="{{ route('my_item', $item->id) }}"><img class="img-item" src="{{ $item->image }}" /></a> 
                    <h6 class="mt-3">{{ $item->name }} 
                        @if($item->isDonated())
                        <i class="fa-solid fa-hand-holding-heart"></i>
                        @endif
                    </h6>
                </div>
                @endforeach 
            </div>
        <div class="pagination">   
        {{ $category_items->links('users.categories.pagination_each_category') }}
        </div> 
    </div>
</div>

    

@endsection
