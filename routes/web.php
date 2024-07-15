<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ContactController;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/reset-successful', [HomeController::class, 'resetSuccess'])->name('password.reset.success');

Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact.store');



// Route::group(['middleware' => 'auth'], function(){
    Route::get('profile/{id}/show', [ProfileController::class, 'show'])->name('profile.show');

// });

