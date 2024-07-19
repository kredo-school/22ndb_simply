<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('contact', 'resetSuccess','guide1');
    }

    public function index()
    {
        return view('home');
    }

    public function resetSuccess()
    {
        return view('auth.passwords.password_reset_success');
    }

    public function guide1()
    {
        return view('guide.guide1');
    }

}

