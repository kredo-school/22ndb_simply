<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function showDonatedItem()
    {
        return view('donated_item');
    }
}
