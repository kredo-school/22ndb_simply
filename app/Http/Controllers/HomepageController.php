<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{

    private $category;
    private $user;

    public function __construct(Category $category, User $user, Item $item){
        $this->category = $category;
        $this->user = $user;
        $this->item = $item;
    }


    public function homepage()
    {

        $categories = Category::all();
        $user = User::findOrFail(Auth::id());
        $otherItems = Item::onlyTrashed()->get();


        return view('users.homepage', [
            'categories' => $categories,
            'user' => $user,
            'otherItems' => $otherItems
        ]);
    }



}
