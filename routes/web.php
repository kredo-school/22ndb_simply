<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/homepage/{id}', [App\Http\Controllers\HomepageController::class, 'homepage'])->name('homepage');

Route::get('/reset-successful', [HomeController::class, 'resetSuccess'])->name('password.reset.success');

Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact.store');


// Profile
Route::group(['middleware' => 'auth'], function(){
    Route::get('profile/{id}/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('profile.destroy');
});

    // Myitems
        Route::get('profile/myitems', [ItemController::class, 'myitems'])->name('profile.myitems');
        Route::get('profile/favorites', [ItemController::class, 'favorites'])->name('profile.favorites');
        Route::get('profile/donated', [ItemController::class, 'donated'])->name('profile.donated');


Route::group(["prefix" => "item", "as" => "item."], function(){
    Route::get('/show', [ItemController::class, 'show'])->name('show');
    Route::get('/add', [ItemController::class, 'add'])->name('add');
    Route::get('/edit', [ItemController::class, 'edit'])->name('edit');
    
 });

 Route::group(["prefix" => "donation", "as" => "donation."], function(){
    Route::get('/show', [DonationController::class, 'show'])->name('show');
 });

//  homepage
//  Route::get('homepage/{id}', [HomepageController::class, 'homepage'])->name('homepage');

//  category
 Route::get('each_category/{id}', [CategoryController::class, 'showCategoryItem'])->name('each_category');

 Route::get('my_item/{id}', [ItemController::class, 'myItemPage'])->name('my_item');

 Route::patch('/edit/category/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');

 Route::post('/create/category', [CategoryController::class, 'createCategory'])->name('create.category');

 Route::delete('/delete/category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');


