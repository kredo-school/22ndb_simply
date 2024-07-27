@extends('layouts.app')

@section('title', 'Add Item')

@section('css')
    <link rel="stylesheet" href={{ asset('css/item.css')}}>
@endsection

@section('content')
<div class="container-fluid align-items-center">
    <h2 class="text-center">
        <i class="fa-solid fa-circle-plus"></i>  Add Item
    </h2>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4 d-flex flex-column align-items-center">
                <div class="icon-wrapper border border-dark d-inline-flex justify-content-center align-items-center custom-mt">
                    <i class="fa-solid fa-image image-icon"></i>
                </div>
                <input type="file" name="image" id="image" class="form-control mt-3 justify-content-center" style="width: 15rem;" aria-describedby="image-info">
                    <div id="image-info" class="form-text">
                        <p class="text-center">
                            Acceptable formats: jpeg, jpg, png, gif only.
                        <br>
                            Maximum file size is 1048kb.
                        </p>
                    </div>
                @error('image')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-auto">
                <form action="{{ route('item.store') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-3">
                            <div class="form-group custom-mt">
                                <label for="category">Category</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-group custom-mt">
                                <select class="form-control" id="category">
                                    @foreach ($all_categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <a href="{{ route('create.category') }}" class="add-category-link text-muted">+ Add category</a>
                            </div>
                        </div>

                        {{-- optional --}}
                        {{-- <div class="col-2 mt-3">
                            <div class="form-group mt-3">
                                <label for="icon">Icon</label>
                            </div>
                        </div>
                        <div class="col-3 mt-3">
                            <div class="form-group mt-3">
                                <select class="form-control" id="icon">
                                    <option value="closet">Closet</option>
                                    <option value="garage">Garage</option>
                                    <option value="kitchen">Kitchen</option>
                                    <option value="entrance">Entrance</option>
                                    <option value="living">Living</option>
                                    <option value="shelf">Shelf</option>
                                    <option value="toilet">Toilet</option>
                                    <option value="bathroom">Bathroom</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>

                    <div class="row">
                        <div class="col-3 mt-3">
                            <div class="form-group mt-3">
                                <label for="item-name">Item name</label>
                            </div>
                        </div>
                        <div class="col-9 mt-3">
                            <div class="form-group mt-3">
                                <input type="text" name="item-name" class="form-control" id="item-name">
                            </div>
                            @error('item-name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 mt-3">
                            <div class="form-group mt-3">
                                <label for="description">Description</label>
                            </div>
                        </div>
                        <div class="col-9 mt-3">
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                            </div>
                            @error('description')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 mt-3">
                            <div class="form-group mt-3 d-flex align-items-center">
                                <label class="form-check-label m-0" for="donation">Donation</label>
                            </div>
                        </div>
                        <div class="col-9 mt-3">
                            <div class="form-group mt-3 d-flex align-items-center">
                                <input type="checkbox" class="form-check-input checkbox-size" id="donation">
                            </div>
                            <p class="text-muted mt-2 nowrap">
                                If you want to donate your item, please check it! <br>
                                You can see your checked item at Donation page.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                        </div>
                        <div class="col-9">
                            <div class="mb-3 d-flex justify-content-around">
                                @include('users.components.btn', [
                                    'r' => route('home'),
                                    'color' => 'dark',
                                    'name' => 'Save'
                                ])
                            </div>
                                {{-- <button type="button" class="col-5 btn btn-outline-dark custom-btn mt-1 mx-1">Cancel</button>
                                <button type="submit" class="col-5 btn btn-dark custom-btn mt-1 mx-1">Save</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
