<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;


class ResetPasswordController extends Controller
{
    protected $redirectTo = '/reset-successful';


    public function __construct()
    {
        $this->middleware('guest');
    } 

    use ResetsPasswords;
}
