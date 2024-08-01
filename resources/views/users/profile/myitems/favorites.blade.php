@extends('users.profile.myitems.myitems')

@section('items-content')
    {{-- Table  --}}
    <table class="table">
        <tbody>
            <tr>
                {{-- @foreach($chunk as $item) --}}
                <td>
                    <div class="d-flex flex-column">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item">
                        <div class="catename-icon">
                            <span>category name</span>
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                        <span>item name</span>
                        <a href="" class="text-dark">username</a>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item">
                        <div class="catename-icon">
                            <span>category name</span>
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                        <span>item name</span>
                        <a href="" class="text-dark">username</a>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item">
                        <div class="catename-icon">
                            <span>category name</span>
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                        <span>item name</span>
                        <a href="" class="text-dark">username</a>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item">
                        <div class="catename-icon">
                            <span>category name</span>
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                        <span>item name</span>
                        <a href="" class="text-dark">username</a>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item">
                        <div class="catename-icon">
                            <span>category name</span>
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                        <span>item name</span>
                        <a href="" class="text-dark">username</a>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <img src="{{asset('images/tshirt-img.jpg')}}" alt="favorite-item-img1" class="img-item">
                        <div class="catename-icon">
                            <span>category name</span>
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                        <span>item name</span>
                        <a href="" class="text-dark">username</a>
                    </div>
                </td>
                
                {{-- @endforeach --}}
                {{-- @for($i = $chunk->count(); $i < 5; $i++)
                    <td></td>
                @endfor --}}
            </tr>
        </tbody>
    </table>

    {{-- add Pagination link--}}
@endsection