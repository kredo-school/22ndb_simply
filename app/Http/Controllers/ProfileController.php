<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function show($id){
        $user  =$this->user->findOrFail($id);

        return view('profile.show')
            ->with('user', $user);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showDirectMessage()
    {
        return view('users.profiles.dm');
    }
}
