@extends('layouts.app')

@section('title', 'Add Item')

@section('content')
<div class="container-fluid">
    <h2 class="text-center">
        <i class="fa-solid fa-circle-plus add-icon"></i>  Add Item
    </h2>
    <div class="row justify-content-center">
        <div class="col-6 text-center mt-3">
            <div class="icon-wrapper mt-3">
                {{-- @if($user->item->image)
                    <img src="#" alt="itemImage">
                @else --}}
                    <i class="fa-solid fa-image itemImage mt-4"></i>
                {{-- @endif --}}
            </div>
            <input type="file" name="image" id="image" class="form-control form-control-sm file-size mt-3" aria-describedby="image-info">
                <div id="image-info" class="form-text">
                    <p class="mb-0">Acceptable formats: jpeg, jpg, png, gif only.</p>
                    <p class="mt-0">Maximum file size is 1048kb.</p>
                </div>
        </div>

        <div class="col-6">
            <form action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-3 mt-3">
                        <div class="form-group mt-3">
                            <label for="category">Category</label>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="form-group mt-3 select">
                            <select class="form-control" id="category">
                                <option>Closet</option>
                                <option>Garage</option>
                            </select>
                            <a href="#" class="add-category-link">+ Add category</a>
                        </div>
                    </div>

                    <div class="col-2 mt-3">
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
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 mt-3">
                        <div class="form-group mt-3">
                            <label for="item-name">Item name</label>
                        </div>
                    </div>
                    <div class="col-9 mt-3">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" id="item-name">
                        </div>
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
                            <textarea class="form-control" id="description" rows="4"></textarea>
                        </div>
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
                        <p class="text-muted mt-3">
                            If you want to donate your item, please check it! <br>
                            You can see your checked item at Donation page.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-dark btn-block mt-3 btn-rounded">Cancel</button>
                        <button type="submit" class="btn btn-dark btn-block mt-3 btn-rounded">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
