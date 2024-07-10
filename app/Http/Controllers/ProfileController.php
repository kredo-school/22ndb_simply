<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showDirectMessage()
    {
        return view('users.profiles.dm');
    }
}
