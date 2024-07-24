<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectMessageController extends Controller
{
    private $user;

    public function show()
    {
        return view('users.dm');
    }
}
