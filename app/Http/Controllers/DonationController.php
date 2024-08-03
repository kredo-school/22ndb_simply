<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\DonationItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;


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


    public function showDonatedItem($id) {
         $donationItem = DonationItem::with('user', 'item')
         ->findOrFail($id); 
         $user = $donationItem->user;
         
         return view('donated-items.donated_item', [ 
            'donationItem' => $donationItem, 'user' => $user,
         ]); 
        
    }
    
    
    public function destroy($id)
    {
        $donationItem = $this->donationItem->findOrFail($id);
        $donationItem->delete();

        if ($donationItem->item) {
            $donationItem->item->delete();
        }


        return redirect()->route('donated.items.index');
    }

}
