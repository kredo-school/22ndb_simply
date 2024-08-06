<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\DonationItem;
use Illuminate\Support\Facades\Auth;


class DonationController extends Controller
{
    protected $donationItem;
    protected $category;
    protected $user;

    public function __construct(DonationItem $donationItem)
    {
        $this->donationItem = $donationItem;

    }

    public function indexDonatedItems() {
        $donationItems = DonationItem::with('user')->paginate(15);
        return view('donated-items.index', [
            'donationItems' => $donationItems
        ]);
    }

    public function showDonatedItem($id)
    {
        $donationItem = DonationItem::with('user')->findOrFail($id);

        return view('donated-items.donated_item', ['donationItem' => $donationItem]);
    }

    public function destroy($id)
    {
        $this->donationItem->findOrFail($id)->delete();
        return redirect()->route('homepage');
    }

    //Myitems page (donated items)
    public function donated(){
        $user = Auth::user();
        $donatedItems = $this->donationItem
                        ->where('user_id',$user->id)
                        ->with('item')
                        ->get();

        return view('users.profile.myitems.donated', ['donatedItems' => $donatedItems]);
    }

}
