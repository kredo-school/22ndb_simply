<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class HomepageController extends Controller
{
    
    // private $category;

    // public function __construct(Category $category){
    //     $this->category = $category;
    // }


    public function homepage($id)
    {

        $categories = Category::all();
       
        

        return view('users.homepage', ['categories' => $categories]);
    
    }

}
