@extends('layouts.app')

@section('title', 'Edit Item')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="container">
    <h2 class="text-center">
        <i class="fa-solid fa-pen me-2"></i> Edit Item
    </h2>
    <div class="container-fluid">
        <form action="{{ route('donated.item.update', $donationItem->item->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 d-flex flex-column align-items-center">
                    <div class="icon-wrapper border border-dark d-inline-flex justify-content-center align-items-center custom-mt">
                        <img src="{{ $donationItem->item->image }}" alt="{{ $donationItem->item->name }}"  class="custom-image-size">
                    </div>
                    <input type="file" name="image" id="image" class="form-control mt-3 file-width" aria-describedby="image-info">
                    <div id="image-info" class="form-text">
                        <p class="text-center color-gray-2">
                            Acceptable formats: jpeg, jpg, png, gif only.
                            <br>
                            Maximum file size is 1048kb.
                        </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group custom-mt">
                                <label for="category">Category</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-group custom-mt">
                                <select class="form-control" id="category" name="category">
                                    @foreach ($all_categories as $category)
                                        @if ($category->user->id === Auth::id())
                                            <option value="{{ $category->id }}" {{ $donationItem->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                <a href="#" class="edit-category-link" data-bs-toggle="modal" data-bs-target="#create-category">+ Add category</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 mt-3">
                            <div class="form-group mt-3">
                                <label for="name">Item Name</label>
                            </div>
                        </div>
                        <div class="col-9 mt-3">
                            <div class="form-group mt-3">
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $donationItem->item->name) }}">
                            </div>
                            @error('name')
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
                                <textarea class="form-control" name="description" id="description" rows="4">{{ old('description', $donationItem->item->description) }}</textarea>
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
                            <input type="checkbox" class="form-check-input checkbox-size" name="donation" id="donation" {{ $isDonated ? 'checked' : '' }}>
                            </div>
                            <p class="color-gray-1 mt-2 nowrap">
                                If you want to donate your item, please check it! <br>
                                You can see your checked item on the Donation page.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                        </div>
                        <div class="col-9">
                            <div class="mb-3 d-flex justify-content-around">
                                @include('users.components.btn', [
                                    'r' => route('donated.item.show', $donationItem->id),
                                    'color' => 'dark',
                                    'name' => 'Update'
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @include('users.categories.modals.create_category')
</div>
@endsection
