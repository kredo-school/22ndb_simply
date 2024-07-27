<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show()
    {
        return view('users.items.show');
    }

    public function add()
    {
        return view('users.items.add');
    }

    public function edit()
    {
        return view('users.items.edit');
    }

    public function myItemPage()
    {
        return view('users.items.my_item');
    }

    // Profile items
    public function myitems(){
        return view('users.profile.myitems.myitems');
    }
    public function favorites(){
        return view('users.profile.myitems.favorites');
    }
    public function donated(){
        return view('users.profile.myitems.donated');
    }
}
