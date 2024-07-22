@extends('layouts.app')

@section('title', 'each_category')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/each_category.css') }}">

<div class="body">
    <div class="container mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="pagename ps-2 pb-2">Closet</h2>
                </div>
                <div class="col-sm-6 text-end pe-3 my-auto">
                    <h6 class="donated-icon"><i class="fa-solid fa-hand-holding-heart"></i> ...Donated Item</h6>
                </div>
            </div>
           <div class="container-small">    
            <div class="row row-cols-5">
                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/denim-pants.jpg') }}" /></a> 
                
                    <h6 class="mt-3">Denim Pants <i class="fa-solid fa-hand-holding-heart"></i></h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/blue-tie.jpg') }}" /></a>  
                
                    <h6 class="mt-3">Blue Tie <i class="fa-solid fa-hand-holding-heart"></i></h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/knitsweater.jpg') }}" /></a>  
                
                    <h6 class="mt-3">Knitsweater <i class="fa-solid fa-hand-holding-heart"></i></h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/shiny-shortpants.jpg') }}" /></a>  
                
                    <h6 class="mt-3">Shiny Short Pants </h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/denim-pants.jpg') }}" /></a> 
                
                    <h6 class="mt-3">Denim Pants </h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/blue-tie.jpg') }}" /></a> 
                
                    <h6 class="mt-3">Blue Tie <i class="fa-solid fa-hand-holding-heart"></i></h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/knitsweater.jpg') }}" /></a>
                
                    <h6 class="mt-3">Knitsweater <i class="fa-solid fa-hand-holding-heart"></i></h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/shiny-shortpants.jpg') }}" /></a>
                
                    <h6 class="mt-3">Shiny Short Pants </h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/denim-pants.jpg') }}" /></a> 
                
                    <h6 class="mt-3">Denim Pants <i class="fa-solid fa-hand-holding-heart"></i></h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/blue-tie.jpg') }}" /></a>
                
                    <h6 class="mt-3">Blue Tie <i class="fa-solid fa-hand-holding-heart"></i></h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/knitsweater.jpg') }}" /></a>   
                
                    <h6 class="mt-3">Knitsweater <i class="fa-solid fa-hand-holding-heart"></i></h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/shiny-shortpants.jpg') }}" /></a>  
                
                    <h6 class="mt-3">Shiny Short Pants </h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/denim-pants.jpg') }}" /></a> 
                
                    <h6 class="mt-3">Denim Pants </h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/blue-tie.jpg') }}" /></a>   
                
                    <h6 class="mt-3">Blue Tie </h6>
                </div>

                <div class="item-box mb-3">
                    <a href="#"><img class="img-item" src="{{ asset('/storage/assets/knitsweater.jpg') }}" /></a> 
                
                    <h6 class="mt-3">Knitsweater</h6>
                </div>

            </div>
        
        </div>
    <div class="mt-5 pt-4 pagination justify-content-center">
        <a href=""><p>< </p></a>
        <a href=""><span>1 </span></a>
        <a href=""><span>2 </span></a>
        <a href=""><span>3 </span></a>
        <a href=""><span>4 </span></a>
        <a href=""><span>> </span></a>
    </div>  
</div>



@endsection
