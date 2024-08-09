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

    public function donateItem()
    {
        return view('user-guide.donate-item');
    }

    public function editItem()
    {
        return view('user-guide.edit-item');
    }

    public function deleteItem()
    {
        return view('user-guide.delete-item');
    }

    public function howToGet()
    {
        return view('user-guide.how-to-get-item');
    }

    public function favoriteItem()
    {
        return view('user-guide.favorite-item');
    }
}
