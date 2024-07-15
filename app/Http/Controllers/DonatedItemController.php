<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonatedItem;

class DonatedItemController extends Controller
{
    public function index()
    {
        $donatedItems = DonatedItem::all();
        return view('donated-items.index', compact('donatedItems'));
    }
}
