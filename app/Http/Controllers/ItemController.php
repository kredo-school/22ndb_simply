<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

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

    public function myItemPage($id)
    {
        $item = Item::find($id);
        return view('users.items.my_item')
                ->with('item', $item);
    }
}
