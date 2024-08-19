@extends('layouts.app')

@section('title', 'Add Item')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="container my-4">
    <h1 class="d-flex justify-content-center align-items-center">
        <i class="fa-solid fa-circle-plus fs-2 me-3"></i> Add Item
    </h1>
    <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row justify-content-center align-items-start">
            {{-- Image --}}
            <div class="col-12 col-md-4 d-flex flex-column align-items-center">
                <div class="icon-wrapper border border-dark d-inline-flex justify-content-center align-items-center custom-mt">
                    <i class="fa-solid fa-image image-icon image-fluid"></i>
                </div>
                <input type="file" name="image" id="image" class="form-control mt-3 file-width" aria-describedby="image-info">
                <div id="image-info" class="form-text">
                    <p class="color-gray-1 no-wrap">
                        Acceptable formats: jpeg, jpg, png, gif only.<br>
                        Maximum file size is 1048kb.
                    </p>
                </div>
                @error('image')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            {{-- Category --}}
            <div class="col-auto p-0">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group custom-mt">
                            <label for="category">Category</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-group custom-mt">
                            <select class="form-control form-select" name="category" id="category">
                                @foreach ($all_categories as $category)
                                    @if ($category->user->id === Auth::id())
                                        <option value="{{ $category->id }}" {{ $selected_category == $category->id ? "selected" : "" }}>{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <a href="#" class="add-category-link" data-bs-toggle="modal" data-bs-target="#create-category">+ Add category</a>
                        </div>
                    </div>
                </div>
                {{-- Item Name --}}
                <div class="row">
                    <div class="col-3 mt-3">
                        <div class="form-group mt-3">
                            <label for="name">Item Name</label>
                        </div>
                    </div>
                    <div class="col-9 mt-3">
                        <div class="form-group mt-3">
                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Description --}}
                <div class="row">
                    <div class="col-3 mt-3">
                        <div class="form-group mt-3">
                            <label for="description">Description</label>
                        </div>
                    </div>
                    <div class="col-9 mt-3">
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="description" id="description" rows="4">{{ old('description') }}</textarea>
                        </div>
                        @error('description')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Donation Checkbox --}}
                <div class="row">
                    <div class="col-3 mt-3">
                        <div class="form-group mt-3 d-flex align-items-center">
                            <label class="form-check-label m-0" for="donation">Donation</label>
                        </div>
                    </div>
                    <div class="col-9 mt-3">
                        <div class="form-group mt-3 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input checkbox-size" name="donation" id="donation" {{ old('donation') ? "selected" : " " }}>
                        </div>
                        <p class="color-gray-1 mt-2 nowrap">
                            If you want to donate your item, please check it! <br>
                            You can see your checked item at Donation page.
                        </p>
                    </div>
                </div>
                {{-- Button --}}
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="mb-3 d-flex justify-content-around">
                            @include('users.components.btn', [
                                'r' => route('homepage'),
                                'color' => 'dark',
                                'name' => 'Save'
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('users.categories.modals.create_category')
</div>
@endsection
