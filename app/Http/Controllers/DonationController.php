<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationItem;

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
            'donationItems' => $donationItems,
        ]);
    }

    public function showDonatedItem($id)
    {
        $donationItem = DonationItem::with('user')->findOrFail($id);

        return view('donated-items.donated_item', ['donationItem' => $donationItem]);
    }

}