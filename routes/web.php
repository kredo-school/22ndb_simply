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

Route::get('/reset-successful', [HomeController::class, 'resetSuccess'])->name('password.reset.success');

Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact.store');

// homepage
Route::get('/homepage', [App\Http\Controllers\HomepageController::class, 'homepage'])->name('homepage');

// ＃Profile
Route::group(['middleware' => 'auth'], function(){
    Route::get('profile/{id}/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('profile.destroy');

});

// Item
Route::group(["prefix" => "item", "as" => "item."], function(){
    Route::get('/show', [ItemController::class, 'show'])->name('show');
    Route::get('/add', [ItemController::class, 'add'])->name('add');
    Route::post('/store', [ItemController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ItemController::class, 'edit'])->name('edit');
    Route::patch('/{id}/update', [ItemController::class, 'update'])->name('update');
    Route::delete('/{id}/destroy', [ItemController::class, 'destroy'])->name('destroy');
 });


//  category
 Route::get('each_category/{id}', [CategoryController::class, 'showCategoryItem'])->name('each_category');

 Route::get('my_item/{id}', [ItemController::class, 'myItemPage'])->name('my_item');

 Route::patch('/edit/category/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');

 Route::post('/create/category', [CategoryController::class, 'createCategory'])->name('create.category');

 Route::delete('/delete/category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');


#Donated-item
Route::get('/donated-items', [DonationController::class, 'indexDonatedItems'])->name('donated.items.index');
Route::get('/donated-items/{id}', [DonationController::class, 'showDonatedItem'])->name('donated.item.show');
Route::get('/donated-items/{id}/edit', [DonationController::class, 'edit'])->name('donated.item.edit');
Route::patch('/donated-items/{id}/update', [DonationController::class, 'update'])->name('donated.item.update');
Route::delete('donated-items/destroy/{id}', [DonationController::class, 'destroy'])->name('donated.item.destroy');

#Favorite
Route::post('/favorite/{donationItem_id}/store', [FavoriteItemController::class,'store'])->name('favorite.store');
Route::delete('/favorite/{donationItem_id}/destroy', [FavoriteItemController::class, 'destroy'])->name('favorite.destroy');

#User Guide
Route::prefix('user-guide')->group(function () {
    Route::view('/register', 'user-guide.register')->name('user-guide.register');
    Route::view('/login', 'user-guide.login')->name('user-guide.login');
    Route::view('/password-reset', 'user-guide.password-reset')->name('user-guide.password-reset');
    Route::view('/register-item', 'user-guide.register-item')->name('user-guide.register-item');
    Route::view('/add-category', 'user-guide.add-category')->name('user-guide.add-category');
    Route::view('/donate-item', 'user-guide.donate-item')->name('user-guide.donate-item');
    Route::view('/edit-item', 'user-guide.edit-item')->name('user-guide.edit-item');
    Route::view('/delete-item', 'user-guide.delete-item')->name('user-guide.delete-item');
    Route::view('/other-users-items', 'user-guide.other-users-items')->name('user-guide.other-users-items');
    Route::view('/favorite-item', 'user-guide.favorite-item')->name('user-guide.favorite-item');
});
