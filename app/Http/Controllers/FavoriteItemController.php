<?php

namespace App\Http\Controllers;

use App\Models\FavoriteItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class FavoriteItemController extends Controller
{
    private $favorite_item;


    public function __construct(FavoriteItem $favorite_item)
    {
        $this->favorite_item = $favorite_item;
    }

    public function store($donationItem_id){
        $this->favorite_item->user_id = Auth::user()->id;
        $this->favorite_item->donation_item_id = $donationItem_id;
        $this->favorite_item->save();

        return back();
    }

    public function destroy($donationItem_id){

        $this->favorite_item->where('user_id', Auth::user()->id)
                   ->where('donation_item_id', $donationItem_id)
                   ->delete();
        
        return redirect()->back();

    }

//Myitems page (favorite items)
    public function favorites($id){
        $favoriteItems = $this->favorite_item
                        ->where('user_id',$id)
                        ->with('donationItem.item')
                        ->paginate(15);

        return view('users.profile.myitems.favorites', ['favoriteItems' => $favoriteItems]);
    }
}

