<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CategoryController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('profile/{id}/show', [ProfileController::class, 'show'])->name('profile.show');

    Route::get('homepage/{id}', [HomepageController::class, 'homepage'])->name('homepage');

    Route::get('each_category/{id}', [CategoryController::class, 'eachCategory'])->name('each_category');

    Route::get('my_item/{id}', [ItemController::class, 'myItemPage'])->name('my_item');

    Route::patch('/edit/category/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');

    Route::post('/create/category', [CategoryController::class, 'createCategory'])->name('create.category');




