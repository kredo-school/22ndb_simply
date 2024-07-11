<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */

    /**
     * Show the password reset success page.
     *
     * @return \Illuminate\View\View
     */
    public function showResetPasswordSuccessPage()
    {
        return view('auth.passwords.password_reset_success');
    }
}
