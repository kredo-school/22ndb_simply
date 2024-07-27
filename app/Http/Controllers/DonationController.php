<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DonationController extends Controller
{
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function show()
    {
        return view('users.donations.show');
    }


    //After creating donation-item-page, need to activate "destroy function"

    // public function destroy($id)
    // {
    //     $item = $this->item->findOrFail($id);
    //     $item->delete();
    //     return redirect()->route('homepage');
    // }
}
