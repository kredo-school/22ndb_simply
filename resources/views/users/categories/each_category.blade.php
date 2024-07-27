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
                    <a href="#"><img class="img-item" src="{{ $item->image }}" /></a> 
                
                    <h6 class="mt-3">{{ $item->name }} <i class="fa-solid fa-hand-holding-heart"></i></h6>
                </div>
                @endforeach 
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
    </div>
    
</div>
    

@endsection
