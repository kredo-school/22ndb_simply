<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function show($id){
        $user  =$this->user->findOrFail($id);

        return view('users.profile.show')
            ->with('user', $user);
    }

// Later need to edit (Auth::user()->id);
    public function edit($id){
        $user = $this->user->findOrFail($id);

        return view('users.profile.edit')->with('user', $user);
    }
}
