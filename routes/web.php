<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["prefix" => "item", "as" => "item."], function(){
    Route::get('/show', [ItemController::class, 'show'])->name('show');
    Route::get('/add', [ItemController::class, 'add'])->name('add');
    Route::get('/edit', [ItemController::class, 'edit'])->name('edit');
});

Route::group(["prefix" => "profile", "as" => "profile."], function(){
    Route::get('/dm/show', [ProfileController::class, 'showDirectMessage'])->name('showDM');
});

Route::group(["prefix" => "donation", "as" => "donation."], function(){
    Route::get('/show', [DonationController::class, 'show'])->name('show');
});

