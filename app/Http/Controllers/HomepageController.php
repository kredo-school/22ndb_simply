<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{

    private $category;
    private $user;

    public function __construct(Category $category, User $user){
        $this->category = $category;
        $this->user = $user;
    }


    public function homepage()
    {

        $categories = Category::all();
        $user = User::findOrFail(Auth::id());

        return view('users.homepage', [
            'categories' => $categories,
            'user' => $user
        ]);

        // return view('users.homepage')
        //         ->with('categories', $categories)
        //         ->with('user', $user);
    }



}
