<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function destroy($id){
        $user = $this->user->findOrFail($id);

        if(Auth::id() !== $user->id){
            return redirect()->route('index')
                ->with('error', 'You do not have permission to delete this account.');
        }
        $user->delete();
        return redirect()->route('index')
            ->with('success', 'Your account has been deleted.');

    }


}
