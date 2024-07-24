<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;


class HomepageController extends Controller
{
    
    private $category;

    public function __construct(Category $category){
        $this->category = $category;
    }


    public function homepage()
    {

        $categories = Category::all();
        // $user = User::findOrFail($id);

        return view('users.homepage', [
            'categories' => $categories,
            // 'user' => $user

        ]);

    

    
    }

}
