<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    //
    public function showDonationItem()
    {
        return view('donation-item');
    }
}
