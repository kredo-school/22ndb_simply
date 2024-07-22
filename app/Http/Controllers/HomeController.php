<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('contact', 'resetSuccess','index');
    }

    public function index(){
        return view('index');
    }

    public function home(){
        return view('home');
    }

    public function resetSuccess()
    {
        return view('auth.passwords.password_reset_success');
    }
}

