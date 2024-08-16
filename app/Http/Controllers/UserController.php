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
        $user->delete();
        session()->flash('message', 'Your account has been deleted successfully!');
        return redirect()->route('index');
    }
}
