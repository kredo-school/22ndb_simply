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

// Show　Profile
    public function show($id){
        $user  =$this->user->findOrFail($id);
        dump($user);
        dump($id);
        return view('users.profile.show')
            ->with('user', $user);
    }

// Edit　Profile
    public function edit(){
        $user = $this->user->findOrFail(Auth::user()->id);

        return view('users.profile.edit')->with('user', $user);
    }

    public function update(Request $request){
        #Validation
        $request->validate([
            'username' => 'required|max:50|unique:users,username,'.Auth::user()->id,
            'email' => 'required|email|unique:users,email,'. Auth::user()->id,
            'avatar' => 'mimes:jpeg,jpg,png,gif|max:1048',
            'address'=> 'max:255',
            'introduction' => 'max:100'
        ]);

        #2: Update
        $user  = $this->user->findOrFail(Auth::user()->id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->introduction = $request->introduction;
        $user->address = $request->address;


            if($request->avatar){
                $user->avatar  = 'data:image/'. $request->avatar->extension(). ';base64,'.base64_encode(file_get_contents($request->avatar));
            }

        #3: Save 
        $user->save();
        return view('users.profile.show')
        ->with('user', $user);      
    }

    
}
