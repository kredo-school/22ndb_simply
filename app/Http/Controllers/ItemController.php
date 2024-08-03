<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    private $item;

    public function __construct(Item $item){
        $this->item = $item;
    }


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
