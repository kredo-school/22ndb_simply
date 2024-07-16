<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function indexDonatedItems()
    {
        return view('donated-items.index');
    }
    public function showDonatedItem()
    {
        return view('donated-items.donated_item');
    }
}
