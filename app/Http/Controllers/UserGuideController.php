<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserGuideController extends Controller
{
    public function register()
    {
        return view('user-guide.register');
    }

    public function login()
    {
        return view('user-guide.login');
    }

    public function passwordReset()
    {
        return view('user-guide.password-reset');
    }

    public function registerItem()
    {
        return view('user-guide.register-item');
    }

    public function addCategory()
    {
        return view('user-guide.add-category');
    }

    public function donatedItem()
    {
        return view('user-guide.donated-item');
    }

    public function editItem()
    {
        return view('user-guide.edit-item');
    }

    public function deleteItem()
    {
        return view('user-guide.delete-item');
    }

    public function otherUsersItems()
    {
        return view('user-guide.other-users-items');
    }

    public function favoriteItem()
    {
        return view('user-guide.favorite-item');
    }
}
