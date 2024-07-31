<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DonatedItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteItemController;
use App\Http\Controllers\UserController;
use App\Models\DonationItem;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/homepage/{id}', [App\Http\Controllers\HomepageController::class, 'homepage'])->name('homepage');

Route::get('/reset-successful', [HomeController::class, 'resetSuccess'])->name('password.reset.success');

Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact.store');


// ＃Profile
Route::group(['middleware' => 'auth'], function(){
    Route::get('profile/{id}/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('profile.destroy');


});


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
 Route::get('each_category/{id}', [CategoryController::class, 'eachCategory'])->name('each_category');

 Route::get('my_item/{id}', [ItemController::class, 'myItemPage'])->name('my_item');

 Route::patch('/edit/category/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');

 Route::post('/create/category', [CategoryController::class, 'createCategory'])->name('create.category');


Route::group(["prefix" => "item", "as" => "item."], function(){
    Route::get('/show', [ItemController::class, 'show'])->name('show');
    Route::get('/add', [ItemController::class, 'add'])->name('add');
    Route::get('/edit', [ItemController::class, 'edit'])->name('edit');
    
 });

 Route::group(["prefix" => "donation", "as" => "donation."], function(){
    Route::get('/show', [DonationController::class, 'show'])->name('show');
 });

 Route::get('homepage/{id}', [HomepageController::class, 'homepage'])->name('homepage');

    Route::get('each_category/{id}', [CategoryController::class, 'eachCategory'])->name('each_category');

    Route::get('my_item/{id}', [ItemController::class, 'myItemPage'])->name('my_item');

    Route::patch('/edit/category/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');

    Route::post('/create/category', [CategoryController::class, 'createCategory'])->name('create.category');

#Donated-item
Route::get('/donated-items', [DonationController::class, 'indexDonatedItems'])->name('donated.items.index');
Route::get('/donated-items/{id}', [DonationController::class, 'showDonatedItem'])->name('donated.item.show');

#Favorite
Route::post('/favorite/{donationItem_id}/store', [FavoriteItemController::class,'store'])->name('favorite.store');
Route::delete('/favorite/{donationItem_id}/destroy', [FavoriteItemController::class, 'destroy'])->name('favorite.destroy');