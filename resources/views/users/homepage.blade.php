@extend('layouts.app')

@section('title', 'homepage')

@section('content')

<style>
    .container-box {
  border: none;
  height: 1200px;
  width: 2000px;
  overflow: scroll;
}
</style>

<div class="container-box">
    @foreach($item_categories as $item_category)
        <div class="row">
            <div class="col-md border border-1 rounded-3 p-3">
                <p>{{ $item_category->category->name }}</p>
                <p>{{ $item_categroy->item->count()}}</p><span>items</span>
                <p><i class="fa-solid fa-pen"></i></p><span><i class="fa-solid fa-trash-can"></i></span>
            </div>
            
            @forelse($item_category->item->take(4))
                <div class="col-md border border-1 rounded-3 p-3">
                    <a href="#">{{ $item_category->item->image }}</a>
                </div>
            @empty
                <div class="col-md-6">
                    <p style="border:1px dashed" class="p-4 text-center">No item</p>
                </div>
            @endforelse      
            

            <div class="col-md border border-1 rounded-3 p-3">
                <a href="#"><p class="text-center">+</p></a>
            </div>

            @if($item_category->item->count() > 4) 
                <div class="col-md">
                    <a href="#"><p>>></p></a>
                </div> 
            @endif 
        </div>
    @endforeach  
</div>

<div class="container">
    <div class="row">
        <div class="col-md">
            <a href="#"><p>+ Add category</p></a>
        </div>

        <div class="col-md-7">
            <a href="#"><p>+ Add item</p></a>
        </div>
    </div>
</div>

@endsection