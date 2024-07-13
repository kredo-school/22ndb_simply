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
}
