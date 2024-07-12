@extends('layouts.app')

@section('title', 'homepage')

@section('content')

<style>

.container-box {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  
}

.home{
  color: #9EA6A6;
  font-weight: 600;
  font-size: 32;
}

.category-name{
    font-weight: 800;
    font-size: 48;
}

.number-item{
    font-weight: 600;
    font-size: 24;
}

.icon{
    color: #9EA6A6;
    width: 28px;
    height: 30px;
}

.img-item{
    width: 175px;
    height: 180px;
    object-fit: cover;
}

.row-eq-height {
    display: flex;
    flex-wrap: wrap;
}





</style>
<div>
    <div class="float-start">
        <p class="home">Home</p>
    </div>
    
    <div class="container-box m-0">
        @foreach($categories as $category)
            <div class="row row-eq-height">
                <div class="col-sm-1 text-center">
                    <p class="category-name">{{ $category->name }}</p>
                    <span class="number-item">{{ $category->item->count()}}</span><span>items</span>
                    <br>
                    <span class="icon"><i class="fa-solid fa-pen"></i></span>
                    <span class="icon"><i class="fa-solid fa-trash-can"></i></span>
                </div>
        
                
                @forelse($category->item->take(4) as $item)
                    <div class="col-sm-2">
                    <a href="{{ $item->image }}"><img style="height: 180px width: 175px" class="img-thumbnail border border-2 rounded-3 img-item" src="{{ asset($item->image) }}" /></a>
                    </div>
                @empty
                    <div class="col-sm-8" style="border: 1px dashed">
                        <p class="text-center">No item</p>
                    </div>                    
                @endforelse
                
                <div class="col-sm-2 border border-1 rounded-3 p-3">
                <a href="#"><p class="text-center">+</p></a>
                </div>
                @if($category->item)
                <div class="col-sm-1">
                    <a href="#"><p>>></p></a>
                </div>
                @endif
        
                
        @endforeach      
                
            
    </div>
         
</div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2 border border-1 rounded-3">
                <a href="#"><p>+ Add category</p></a>
            </div>

            <div class="col-sm-10 border border-1 rounded-3">
                <a href="#"><p>+ Add item</p></a>
            </div>
        </div>
    </div>
</div>
@endsection