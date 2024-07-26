<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;


class HomepageController extends Controller
{
    
    private $category;
    private $user;

    public function __construct(Category $category, User $user){
        $this->category = $category;
        $this->user = $user;
    }


    public function homepage($id)
    {

        $categories = Category::all();
        $user = User::findOrFail($id);

        return view('users.homepage', [
            'categories' => $categories,
            'user' => $user
        ]);
    }



}
