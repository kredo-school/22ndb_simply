<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('contact', 'resetSuccess','index','guide1');
    }

    public function index(){
        return view('index');
    }

    public function home(){
        return view('users.homepage');
    }

    public function resetSuccess()
    {
        return view('auth.passwords.password_reset_success');
    }


}

